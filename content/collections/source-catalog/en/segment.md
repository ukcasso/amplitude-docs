---
id: 5016fc9f-620b-4dae-82b0-0d9d9377c73e
blueprint: source-catalog
use_cases:
  - "Utilize Segment's software and APIs to collect, clean, and control customer data across various digital touchpoints. By sending events from Segment to Amplitude, businesses can leverage Amplitude's analytics capabilities to gain deeper insights into user behavior, track key metrics, and optimize product experiences."
  - 'Send Amplitude behavioral cohorts to Segment to leverage them with ad networks, marketing automation tools, and personalization engines. By utilizing cohorts created in Amplitude, businesses can better tailor campaigns and product experiences based on user behavior and attributes.'
short_description: "Join 20,000+ businesses that use Segment's software and APIs to collect, clean, and control their customer data."
integration_category:
  - cdp
integration_type:
  - cohorts
  - raw-events
partner_doc_link: 'https://segment.com/docs/connections/destinations/catalog/amplitude/'
title: Segment
source: 'https://www.docs.developers.amplitude.com/data/sources/segment'
category: CDP
author: 0c3a318b-936a-4cbd-8fdf-771a90c297f0
connection: source
partner_maintained: false
integration_icon: partner-icons/segment.svg
exclude_from_sitemap: false
updated_by: 0c3a318b-936a-4cbd-8fdf-771a90c297f0
updated_at: 1713825641
---
With Segment, you can manage data and integrations with services across your Growth, Product, and Marketing stack. By tracking events and users via Segment's API and libraries, you can send your product's data to all your analytics and marketing platforms, with minimal instrumentation. They offer support for most platforms, including iOS, Android, JavaScript, Node.js, PHP, and more.

This guide complements [Segment's Amplitude (Actions)](https://segment.com/docs/connections/destinations/catalog/actions-amplitude/) documentation. It provides more details on how they affect your data in Amplitude, and instructions for setting up the integrations.

{{partial:admonition type="warning" title="Segment's Amplitude (Classic) destination"}}
Segment has an old destination, [Segment's Amplitude (Classic)](https://segment.com/docs/connections/destinations/catalog/amplitude/). Future updates are limited to security updates and bug fixes. This document is mainly focused on the new destination, [Segment's Amplitude (Actions)](https://segment.com/docs/connections/destinations/catalog/actions-amplitude/).
{{/partial:admonition}}

## Setup overview

To send data to Amplitude, you can: 

- Install Amplitude's SDKs and send data directly to Amplitude by [client-side bundled integration](#client-side-bundled-integration).
- Set up a [Segment destination](#set-up-segment-destinations) and connect it with a [Segment source](#set-up-segment-sources). 

### Set up Segment Destinations

Follow [these steps](https://segment.com/docs/connections/destinations/catalog/actions-amplitude/#getting-started) with your [Amplitude API key](/docs/apis/authentication). 

To ensure that Segment can send data to Amplitude, make sure your Segment's Amplitude destination is connected to one of your Segment sources:

- In your Segment workspace, click **Connections** -> **Sources**. 
- Verify the status of your Amplitude destination is set to **Enable** to allow Segment to send data to Amplitude

Send data to your Segment source, and [validate your events in Amplitude](/docs/analytics/debug-analytics).

### Client-side bundled integration

In addition to [Segment's libraries](https://segment.com/docs/sources/), you can install [Amplitude's SDKs](/docs/sdks/analytics). If you do, Segment's library delegates the data collection to Amplitude's SDK, which then sends the data to Amplitude's servers. 

There are advantages and disadvantages to taking the client-side bundled approach. One advantage is that adding Amplitude native SDKs adds session tracking capability and automatic user property tracking:

- Events logged during the same user session are grouped together when viewing that user's stream on Amplitude Dashboard. This also allows for [session length calculations](/docs/data/sources/instrument-track-sessions).
- The SDKs automatically record several user properties such as device type, operating system, and user agent. Here is a list of the [user properties](/docs/get-started/user-property-definitions) tracked automatically by Amplitude's SDKs.
- By enabling Track Session Events, you can ensure the SDKs automatically send `Start Session` and `End Session` events to mark the start and end of a user's mobile session.
- When Amplitude's SDKs are installed, you can directly interact with them. See the docs for [iOS SDK](/docs/sdks/analytics/ios/ios-swift-sdk) and [Android SDK](/docs/sdks/analytics/android/android-kotlin-sdk) to learn more.

Keep in mind that adding more SDKs increases the size of your application (each one is <200kb). You may have to account for this if you are already using several libraries in your app. These SDKs are optional, and you can still conduct almost the same analysis in Amplitude by using only Segment's libraries. 

Without session tracking:

- Events have a session ID of -1, so events triggered by a user during the same session aren't grouped together when viewing that [user's timeline](/docs/analytics/user-data-lookup) in Amplitude. 
- Session length calculations aren't available in Amplitude, so the [User Sessions](/docs/analytics/charts/user-sessions/user-sessions-track-engagement-frequency) chart doesn't display any data.
- Amplitude's Pathfinder and [Pathfinder Users](/docs/analytics/charts/legacy-charts/legacy-charts-pathfinder-users) charts aren't able to display out-of-session events alongside events within a session. 
- You can't perform [session-based Funnel Analysis](/docs/analytics/charts/funnel-analysis) effectively.

Without Amplitude's SDKs, you have to map user properties such as device type and operating system manually to track them, as described in [Segment's docs](https://segment.com/docs/integrations/amplitude/#special-properties).

### Set up Segment Sources

Set up a [Segment Source](https://segment.com/docs/connections/sources/) to send data to Segment.

#### JavaScript (client-side)

Follow [Segment's Analytics.js quickstart guide](https://segment.com/docs/connections/sources/catalog/libraries/website/javascript/quickstart/#step-2-add-the-segment-snippet) and paste the snippet onto your website. Don't forget to put your Segment write key in the snippet.

You are now ready to use `track` and `identify` to track users. Analytics.js also automatically installs Amplitude's JavaScript SDK onto your website, so you can access the JavaScript SDK directly.

There are settings for the JavaScript integration you can configure in the Advanced Settings of your Segment Amplitude integration panel, without needing to change your instrumentation:

- **Batch Events** (default false): When true, you can send events in batches of 30, or every 30 seconds. You can adjust these two thresholds by changing the values of *Event Upload Threshold* and *Event Upload Period Millis*.
- **Track All Pages to Amplitude, Track Categorized Pages to Amplitude, and Tracking Named Pages to Amplitude** (default false): When true, then calling `page` generates `Viewed ___ Page `events. If you select more than one of these three options at a time, a single `page` call generates multiple events.
- **Track Referrer to Amplitude** (default false): When true, Amplitude captures the user's referrer, initial referrer, and referring domain as user properties.
- **Track UTM properties** (default false): When true, Amplitude captures UTM properties from URL parameters or the cookie as user properties.

#### iOS (client-side)

{{partial:admonition type="note" title=""}}
If you send `screen` calls to Amplitude, review these destination settings.
{{/partial:admonition}}

Follow [Segment's iOS quickstart guide.](https://segment.com/docs/sources/mobile/ios/quickstart/#step-1-install-the-sdk) Install the Analytics pod using CocoaPods, import the `SEGAnalytics.h` header file, and initialize Segment's library in your iOS app.

At this point, you can start calling `track` and `identify` to track users in your app. You also have the option to [install Amplitude's iOS SDK](https://segment.com/docs/connections/sources/catalog/libraries/mobile/ios/#packaging-device-mode-destination-sdks) alongside Segment's library to supplement with more tracking capabilities. The pros and cons of adding Amplitude's SDK are explained [Client-side bundled integration](#client-side-bundled-integration). If you choose to add the Amplitude SDK, follow these steps:

1. Install a second pod 'Segment-Amplitude' in CocoaPods:
    `pod 'Segment-Amplitude'` 
2. If you are using Objective-C, then add this second header in the file where you initialized the Segment SDK:
    `#import <Segment-Amplitude/SEGAmplitudeIntegrationFactory.h>`
3. If you are using Swift and have `use_frameworks!` set, then add this second header in the file where you initialized the Segment SDK:
    `#import <Segment\_Amplitude/SEGAmplitudeIntegrationFactory.h>`
4. Register Amplitude's SDK with Segment's SDK (do this before you initialize Segment's SDK):
  
    ```obj-c
    [configuration use:[SEGAmplitudeIntegrationFactory instance]];
    [SEGAnalytics setupWithConfiguration:configuration];
    ```

For examples of how your code should look, see the [Segment iOS demo code](https://github.com/amplitude/Segment-iOS-Demo/blob/master/m2048/M2AppDelegate.m#L17-L20). 

#### Android (client-side)

{{partial:admonition type="note" title=""}}
If you send `screen` calls to Amplitude, review these destination settings.
{{/partial:admonition}}

Follow [Segment's Android quickstart guide.](https://segment.com/docs/sources/mobile/android/quickstart/#step-1-install-the-library) Install Segment's library using Gradle and initialize the Analytics client in your Android app. You may also need to update your app's permissions in the Android manifest file.

At this point, you can start calling `track` and `identify` to track users in your app. You also have the option to [install Amplitude's Android SDK](https://segment.com/docs/sources/mobile/android/#packaging-device-based-destination-sdks) alongside Segment's library to supplement with more tracking functionality. The pros and cons of adding Amplitude's SDK are explained [Client-side bundled integration](#client-side-bundled-integration). If you choose to add the Amplitude SDK, follow these steps: 

1. Add the following to your `build.gradle` file:
    `compile 'com.segment.analytics.android.integrations:amplitude:+'`
2. In the file where you initialize the Segment SDK add:
    `import com.segment.analytics.android.integrations.amplitude.AmplitudeIntegration;`
3. Register the Amplitude integration with Segment's SDK. When building the Analytics object, append `.use(AmplitudeIntegration.FACTORY)` before the `.build()`. It would look something like this:
    
    ```java
    Analytics analytics = new Analytics.Builder(this,"KEY").use
    (AmplitudeIntegration.FACTORY).build();
    Analytics.setSingletonInstance(analytics);
    ```

For examples of how your code should look, see the [Android demo code](https://github.com/amplitude/Segment-Android-Demo/blob/fe33fe91856c6f410d357efaf7ab39342c782ef6/app/src/main/java/com/lecz/android/tiltmazes/TiltMazesActivity.java#L88). 

#### Server-side and other libraries

Follow the appropriate instructions in Segment's [documentation](https://segment.com/docs/sources/).

## Mappings between Segment and Amplitude SDK functions

Segment and Amplitude use slightly different terms to describe the same concepts. The following table shows the mapping between the two:

| Segment | Amplitude | Description |
| --- | --- | --- |
| `track` (with properties) | `track` (with properties) | Logs an event with the specified event properties. |
| track with property "revenue" | `revenue` | Logs a revenue event to record a revenue amount. |
| `identify` with traits | `setUserId`, `identify` | Assigns a `userId` and set any traits as user properties. |
| `screen` / page with name | `track "Viewed" + name` | Logs an event "Viewed [page]" where [page] is the name provided. |
| `alias` | [User Mapping (Aliasing)](/docs/apis/analytics/user-mapping) | UserId aliasing lets you merge two users together that would otherwise have different User IDs tracked in Amplitude. |
| `group` | `groupIdentify` (with GroupName) | Lets you designate user groups. |

For more information, see the [Segment documentation.](https://segment.com/docs/integrations/amplitude/)

## Export cohorts to Segment

Amplitude Activation lets you automatically send behavioral audiences to ad networks, marketing automation tools, and personalization engines so you can better tailor campaigns and product experiences.

See [Send Cohorts to Segment](/docs/data/destination-catalog/segment) for more information.

## More help

Contact Segment support (friends@segment.com) or Amplitude support.