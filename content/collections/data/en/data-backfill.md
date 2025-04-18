---
id: 11423e67-aee4-4d24-9501-229b6065861b
blueprint: data
title: 'Data backfill'
landing: false
source: 'https://www.docs.developers.amplitude.com/analytics/data-backfill-guide/'
exclude_from_sitemap: false
updated_by: 5817a4fa-a771-417a-aa94-a0b1e7f55eae
updated_at: 1721925960
---
You can import historical data to Amplitude yourself using the [Batch Event Upload API](/docs/apis/analytics/batch-event-upload). 

## Considerations

Review these considerations before backfilling data.

- Consider keeping historical data in a separate Amplitude project without backfilling it into a live production project. 
Keeping historical data separate makes the upload easier, and it keeps your live Amplitude data clean and focused on current and future data. 
Typically you don't need to check historical data often, but still want it to be available. Another consideration is that historical user property values overwrite current live values during a backfill.
 Amplitude syncs the out-of-date property values onto new live events coming in. You can skip user property sync by adding the following in your event payload: `"$skip_user_properties_sync": true`.
- If you want to connect historical data with current data, combine the historical data and live data in the same project. To connect users from each dataset,
 the users need to have matching Amplitude user IDs in each set.
- The new user count may change. Amplitude defines a new user based on the *earliest* event timestamp that Amplitude sees for a given user.
 As a result, if Amplitude records a user as new on June 1 2021 and you backfill the data for the user from February 1 2021, then Amplitude defines the user is new on February 1 2021.
- Backfilling can compromise your app data. If there is a mismatch between the current user ID and the backfilled user ID, then Amplitude interprets the two distinct User IDs as two distinct users. 
As a result, users are double counted. Because Amplitude can't delete data after it's recorded, you may have to create a new project to prevent data issues. 
- Amplitude uses the Device ID and User ID fields to compute the Amplitude ID. For more information, see [Track unique users](/docs/data/sources/instrument-track-unique-users).
- Events in the backfill count toward your monthly event volume.

## Limits 

There are a few different limits to keep in mind when backfilling data.

- **Daily limit**: There is a ingestion daily limit of 500K events per device ID (and per user ID) for a project, to protect Amplitude from event spam. This limit has a 24 hours rolling window of 1 hour intervals. 
This means that at any given time, a particular user or device can only send 500K events in the last 24 hours. If you hit this limit, you get `exceeded_daily_quota_users` or `exceeded_daily_quota_devices` in the response. See the [Batch Event Upload](/docs/apis/analytics/batch-event-upload#daily-limit) for more information.
- **Batch limit**: There is an upload limit of 100 batches per second and 1000 events per second. You can batch events into an upload but Amplitude recommends not sending more than 10 events per batch. Amplitude throttles your upload if you send more than 10 events per second for a single device ID. See [Batch Event Upload](/docs/apis/analytics/batch-event-upload#code-429-explained) for more information about throttling. However, to avoid overloading your ingestion workers, Amplitude recommends limiting backfill event upload to 300 events per second per device ID. It's possible for backfills to exceed 300 events per second if you iterate through historical data and send data as fast as possible in parallel.

## Backfill best practices

- Review the documentation for the [Batch API](/docs/apis/analytics/batch-event-upload). If you exported historical data using the Export API and want use the data to backfill, note that the fields exported aren't in the same format as the fields needed for import. For example, the Export API uses `$insert_id` while HTTP and Batch APIs use the format `insert_id` without the `$`.
- Understand which fields you want to send and map your historical data to Amplitude fields. Amplitude strongly recommends that you use the `insert_id` field to deduplicate events.
- Because there is no way to undo an import, create a test project in Amplitude to send sample data from your backfill. Do several tests with a few days worth of data in an Amplitude test project before the final upload to the production project.

This is Amplitude's recommendation for backfilling large amounts of data:

1. Break up the set of events into mini non-overlapping sets (for example, partition by `device_id`).
2. Have one worker per set of events executing these steps:
    1. Read many events from your system.
    2. Partition those events into requests based on `device_id` or `user_id`.
    3. Send your requests concurrently/in parallel to Amplitude.

To optimize this process further, add aggressive retry logic with high timeouts. Continue to retry until you receive a 200 response. If you send an `insert_id`, then Amplitude deduplicates data that has the same `insert_id` sent within 7 days of each other. 

### Skip user properties sync

When Amplitude captures an event, it includes the current values for each user property, which can change over time. When Amplitude receives an event with user properties, it updates the existing user properties, but also adds any new user properties. You can change this behavior by adding `"$skip_user_properties_sync": true` to the event payload. 

When you include `"$skip_user_properties_sync": true`, Amplitude ignores the user properties table completely. The event has only the user properties sent with the event, doesn't update the user properties table, and doesn't display any pre-existing user properties.


{{partial:admonition type="example" heading=""}}
For example, you send the following event to Amplitude. The user property table already has the user property `"city": "New York"`

```json
{
    "api_key": "API_KEY",
        "events": [
    {
        "user_id": "b4ee5d78-e1b6-11ec-8fea-0242ac120002",
        "insert_id": "97b74bc6-a8c8-48f3-bbc7-de9f95aea636",
        "device_id": "",
        "event_type": "Button Clicked",
        "user_properties":{
            "subscriptionStatus":"active"
        }
    }
    ]
}
```

The event appears in Amplitude as:

```json
        "events": [
    {
        "user_id": "b4ee5d78-e1b6-11ec-8fea-0242ac120002",
        "insert_id": "97b74bc6-a8c8-48f3-bbc7-de9f95aea636",
        "device_id": "",
        "event_type": "Button Clicked",
        "user_properties":{
            "city":"New York",
            "subscriptionStatus":"active"
        }
    }
    ]
```

You include `"$skip_user_properties_sync": true` and send the same event. The event appears in Amplitude like this: 

```json
        "events": [
    {
        "user_id": "b4ee5d78-e1b6-11ec-8fea-0242ac120002",
        "insert_id": "97b74bc6-a8c8-48f3-bbc7-de9f95aea636",
        "device_id": "",
        "event_type": "Button Clicked",
        "$skip_user_properties_sync": true,
        "user_properties":{
            "subscriptionStatus":"active"
        }
    }
    ]
```
Notice that it doesn't include the city property.

Next, you include `"$skip_user_properties_sync": true` and send this event:

```json
{
    "api_key": "API_KEY",
        "events": [
    {
        "user_id": "b4ee5d78-e1b6-11ec-8fea-0242ac120002",
        "insert_id": "97b74bc6-a8c8-48f3-bbc7-de9f95aea636",
        "device_id": "",
        "event_type": "Button Clicked",
        "$skip_user_properties_sync": true,
        "user_properties":{
            "city":"San Francisco"
        }
    }
    ]
}
```

Amplitude doesn't update the user properties table, and the event appears in Amplitude like this:  

```json
        "events": [
    {
        "user_id": "b4ee5d78-e1b6-11ec-8fea-0242ac120002",
        "insert_id": "97b74bc6-a8c8-48f3-bbc7-de9f95aea636",
        "device_id": "",
        "event_type": "Button Clicked",
        "user_properties":{
            "city":"San Francisco"
        }
    }
    ]
```
Any new event still has `"city":"New York"`, but this event displays `"city":"San Francisco"`.
{{/partial:admonition}}

### Timing

If you send data that has a timestamp of 30 days or older, then it can take up to 48 hours to appear in some parts of Amplitude system. Use the [User Activity tab](/docs/analytics/user-data-lookup) to check the events that you are sending as that updates in real-time regardless of the time of the event.

### Resources

- Example scripts for data import: <https://gist.github.com/djih/2a7e7fb2c1d45c8277f7aef64b682ed6>
- Example data: <https://d24n15hnbwhuhn.cloudfront.net/sample_data.zip>[
](https://d24n15hnbwhuhn.cloudfront.net/sample_data.zip)

## Data ingestion system

In Amplitude's ingestion system, each user's current user properties are always tracked and synced to a user's incoming events.

![](statamic://asset::help_center_conversions::data/data-user-property-sunc.svg)

When sending data to Amplitude, you either send event data or send `identify` calls to update a user's user properties. These `identify` calls update a user's current user property values and affect the user properties associated to events received after the `identify` call. 


{{partial:admonition type="example" heading=""}}
The Datamonster user currently has one user property, 'color', and it is set to 'red'. Then, Datamonster logs 'View Page A' event and triggers an `identify` that sets 'color' to 'blue'. Afterwards, they log a 'View Page B' event:

1. `logEvent` -> 'View Page A'
2. `identify` -> 'color':'blue'
3. `logEvent` -> 'View Page B'

If Amplitude receives events from Datamonster in that exact order, then you would expect 'View Page A' to have 'color' = 'red' and 'View Page B' to have 'color' = 'blue'. This is because Amplitude maintains the value of user properties at the time of the event. For this reason, the order in which events are uploaded is very important. If the `identify` was received after 'View Page B', then 'View Page B' would have 'color' = 'red' instead of 'blue'. 
{{/partial:admonition}}

Because Amplitude processes all a user's events using the same ingestion worker, Amplitude guarantees that it processes events in the order in which they're received. In essence, all the Datamonster user's events queue up in order on a single ingestion worker. If these events were instead processed in parallel across two separate workers, then it's harder to guarantee the order. For example, one worker might be faster than another. 

Because a single ingestion worker processes a user's events, a user sending an abnormally high number of events in a short period would overload their assigned worker. To avoid overloading your ingestion workers, Amplitude recommends limiting event upload to 300 events per second per device ID. It's possible for backfills to exceed 300 events per second if you iterate through historical data and send data as fast as possible in parallel. Amplitude keeps track of each device ID's event rate and reject events and returns a 429 throttling HTTP response code if a device ID is sending too many events. If you receive a 429 in response to an event upload, the process should sleep for a few seconds and then keep retrying the upload until it succeeds. This ensures that events aren't lost in the backfill process. If you don't retry after a 429 response code, then that batch of events isn't ingested. 

## Backfill preexisting users

If you have preexisting users, then you should backfill the users to accurately mark when they were new users. Amplitude marks users new based on the timestamp of their earliest event.

To backfill your preexisting users, use the [Batch API](/docs/apis/analytics/batch-event-upload). Send a "dummy event" or a signup event where the event timestamp is the actual time the user was originally created. For instance, if a user signed up on Aug 1st, 2022, the timestamp of the event you send should be Aug 1st, 2022.
