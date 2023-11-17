<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'mudarribe-fitness'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'mudarribe-fitness' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

            'credentials' => [
                "type"=> "service_account",
                "project_id"=> "mudarribe-fitness",
                "private_key_id"=> "72eb0e6e2c3f218125ecd2f8a48889bcdf31d7ca",
                "private_key"=> "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC/VOPWa9ldMPG1\nmYVUvHLyNRYhfO9BwBe0u9ya2f6Xmn3xOsrSEwv3nFGBrxsJqX1UV915sj/ZFpwl\nId18V0qkwH5QQK6RMcQOHhhuTucjqObnAFcI76b/7KgRzLG3WA04KwSCnncWum91\n3nGuSiM36Fhg2nr6OIF5o8rZenaMF5vV/FqgzGDiKM7hrEvOWO+4+mjUAv+S5VAZ\nA5QQ2ipMs2BLHtfwKvC3dDlLvW0rBDS4rfTyP28waIOY837xcYZzwcxEDhd/lIjJ\nlYov1MmKa2knciJiIzPay6c9DkwRpyLGtrVZ3rPTh00AstCRdBHwufzOlp6+2xRU\ntZtITZu3AgMBAAECggEAKAbr5UtJvX/ESWAVLy1/hKFLgHUBHsm/i91zYOfzJac5\n6tIIZVt7uPD4cj9+Ug6lvBPnrxJ13gYnY3NKwT0HziDBLCvj+Vcmc2ejZ8xU+bZX\nnAMLskBkuQy6+oJOuZMPrOz+9A6Pzm7xa4C+Wp6C8KrIdnaunJNeruJvyQCgNV1M\nO+zU52u88cQvY7BfEaZ4xGA/+GmsaRdtsjLzf0a2+wTitsmpLFNM/c5itBql21YD\nEPnVVMgOVek+rm5VjonowQ91d7hYfIdlxt4IgnMdTWazwcRG+bpZThRL1ylAWi/R\nH6rdYRmDWVsEVHfb1G/jTUL0OtijtznzAvFyMJtkaQKBgQDsh9LLZU8SqyfcskW+\n0YvVzETzXoQMIgHK88jJb+HhKJ4Unczeyi1YWQO2/h8qW6w4x/1IsT9PPzlWdmZk\nlzF604xZBCWVEKFoN0V6Un3klrvysQiOSzvUuaELdSuwZV2pPwuKr1yIgIYFZpeX\n2fSqwiKa/xEllZIjMRIyKH5/7wKBgQDPFKIbo8c9Ns4jGS0e6EoXi/0MqQvOHG4F\ntTbzZ19nxuwx0DX5vwQYrf46Wf22ST7AQYW2bYtSLeTqsCFF/a9tO7tTncGcvCjs\no+e3gCMAKnDAH5tCeY9Em4onWnw68d1Izl6jq2Dz+V00+iQtr4CHOrkmdOZvVUNp\nIFfyLKdYuQKBgQDKsQYZ2KIvTE6nmHmeMPHU7+xyZZ9gyk+g/NImlOMLUQROhH+I\nt9at6/H8Ab7xTIfETNUnUwT+wx4+ks3iC5KSP/D4Y05VdF/s79hxH3nUxrsfGUhM\nr/oArGZubCVZTzQ5EdaxLN9t9j1jKWxk65j4L8755fRqscb+s1F1fDATLwKBgQDG\nSKqErskbezvc7cF/o8s2Ssvt8HwmSqCrBH7uiGAZPadydz0Hu/jPLOOOuhavEelt\nLBA9wxyxftKASlBB9Yyhmp1fjmISkzTYioVY9vAMu5ak0F7ZQw6FEi4ySnlD884A\nZeLG81Xtpyuxi4dS24bFddxNz4fKuSjII7kyYcGHuQKBgDrQlDl9kv1Qm7KZrszC\neFcELI5MOkCvtz0IfuRvoaNCGn90ZOnGvEPB8YmQEd2lFU4y9Hc+z2QyNPNQUGoN\nOc3e/NDI58mk6XYYWaWkpdiEd8zIr5rQyCqimppjhxIDYzpxC0VHn7MqG1yQEUsd\nQV/ZmidCHOgeBdFbNSgl3w5o\n-----END PRIVATE KEY-----\n",
                "client_email"=> "firebase-adminsdk-ehb70@mudarribe-fitness.iam.gserviceaccount.com",
                "client_id"=> "116336733087150749989",
                "auth_uri"=> "https://accounts.google.com/o/oauth2/auth",
                "token_uri"=> "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url"=> "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url"=> "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-ehb70%40mudarribe-fitness.iam.gserviceaccount.com",
                "universe_domain"=> "googleapis.com"
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
