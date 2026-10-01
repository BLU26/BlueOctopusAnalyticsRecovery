# BlueOctopusAnalyticsRecovery

Temporary PlentyONE / plentyShop LTS plugin for Google Analytics access recovery.

## What it does
Adds exactly one public route:

https://www.blueoctopus.de/analytics.txt

The route returns the Google Analytics recovery text as plain text with HTTP 200.

## Important
- Install only in the Blue Octopus plugin set.
- Do not replace or change the existing Google Tag Manager plugin/container.
- After Google has restored access, this temporary plugin can be disabled and removed.
- Test the URL in a private/incognito browser window after deployment.
