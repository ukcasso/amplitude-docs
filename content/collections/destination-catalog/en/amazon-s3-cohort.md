---
id: 73eed3ed-002c-4060-9568-c277d9339bf8
blueprint: destination-catalog
title: 'Amazon S3 (Cohort)'
connection: destination
integration_type:
  - cohorts
integration_category:
  - storage
partner_maintained: false
integration_icon: partner-icons/amazon-s3.svg
exclude_from_sitemap: false
updated_by: 0c3a318b-936a-4cbd-8fdf-771a90c297f0
updated_at: 1720113620
---

Set up this integration to send cohorts to an Amazon S3 bucket. This enables you to export groups of users out of Amplitude and synchronize them with other databases or stored procedures you've built off your Amazon S3 bucket. From there, you can use Amplitude cohorts in internal analytics dashboards and internal personalization engines.

{{partial:admonition type="note" title=""}}
Amplitude updated its security model to better align with AWS best practices. New instances of this destination default to IAM role-based access to improve security and prevent over-permissioning. Existing S3 destinations remain unchanged to avoid disruption. 

To update your existing destinations to IAM roles, delete the existing connection and reconfigure the cohort sync destination to use the updated security model.
{{/partial:admonition}}

## Setup

### Prerequisites

- From your Amazon S3 console, find the S3 bucket you would like Amplitude to sync with. Copy its name, path, and region.

### Amplitude setup

1. In Amplitude Data, click **Catalog** and select the **Destinations** tab.
2. In the Cohort section, click **Amazon S3 (Cohorts)**. Don't select **Amazon S3** for this integration. 
3. Enter the bucket name, select a region, enter a bucket path (optional), and enter a name for the destination. The name is used when syncing a cohort from Amplitude. 
4. Select the Amplitude user property to match users between Amazon S3 and Amplitude. 
5. Click **Copy Bucket Policy**. 

### Amazon S3 setup

1. In the Amazon S3 console, go to the S3 bucket and navigate to **Permissions → Bucket Policy.** Paste the Amplitude bucket policy into the Amazon S3 console.
2. Optionally, you can also set the following two parameters for your buckets:
    - **Require suffix**: When set, this allows users to append a string at the end of every file exported to S3.
    - **User property**: You can select a single user property to sync along with each user as an extra column in each file exported.

## Send a cohort

After you connect the S3 bucket to Amplitude, you can sync any cohort to that bucket. To do so, follow these steps:

1. From the Cohorts page in Amplitude, click the cohort to send, or create a cohort.
2. Click **Sync**.
3. Select **Amazon S3**, then click **Next**.
4. Select the S3 location. This is what you named the bucket when setting up the integration.
5. (Optional). Set the following two optional parameters:
      - **User Property**: Here, you can append a user property to each user exported in this cohort. The user property appears as a column in the exported CSV file.
      - **Routing Key**: Enter a string to be appended to the end of the cohort file name in S3.
6. Choose a sync cadence. 
7. When finished, click **Sync**.

## Cohorts in S3

Your cohort is synced as a CSV to the bucket you specified. Within the folder, there is a list of CSV files.

Each sync generates three CSV files: 

- One with users who **entered** the cohort since the last sync.
- One with users who **exited** the cohort since the last sync.
- One containing the users that existed in the cohort at the time of the last sync. This way, you always have a complete historical log of S3 cohort membership.

The CSV files all use this naming convention:

`path/integer_cohortID_YYYY-MM-DDTHH:SS_difftype_routingkey.csv`

Where:

- `path` : The optional folder prefix on the path the file should be written to.
- `cohortID` : The unique identifier for your cohort. You can find this number in the URL of your cohort in Amplitude.
- `YYYY-MM-DDTHH-SS` : The timestamp when the cohort was synced.
- `difftype` : This describes which of the three user groups the CSV file contains. Acceptable values are `entering` , `exiting` , or `existing`.
- `routingkey`: The optional string suffix entered before.

The timestamp in the CSV name refers to the day/time the cohort was synced. If you have an hourly/daily scheduled sync, Amplitude creates a new file for every sync with the full list of users who qualify in that cohort at that time. You can keep a historic log of audience membership.

Each CSV file contains a list of users, with data broken into the following columns:

- ` amplitudeID`: The internal Amplitude identifier for the user.
- ` userID`: Your unique database identifier for the user.
- ` userProperty`: The value for a user property you added in step 3 of the [send a cohort section](#send-a-cohort); there is one column for each user property. In portfolio projects, there is a separate column for each source app.
