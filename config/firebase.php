<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

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
                "type" => "service_account",
                "project_id" => "mudarribe-fitness",
                "private_key_id" => "25b32d01df6b3b9abb1da740abd1dc461a10470d",
                "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCu+PSoi4xFzqHx\nqOhFZFYYDxGs15akLSmUYG6pDEO+BL9xxx24SS3jUAVwKD1SAPDyPtjgbbgEHDJV\nHzFxv1f2iuH3DRja9/uImmLFW11Zi18Qlisf1CdDd3PbO8THuqzhF/tzphuQjD6w\nY0Tw63/GWw7ORuAinRXH5JWDMKz08m1g5rAzXKy3/0+/9Lm1m1ztnU5VIz9Nr+9I\nQ9pMOoZ9xKdHu3OQcn94uyfGdIpk2/V6b2Ya0ErcUpHnhFRCT3mOSs5Z5ectt86c\niFtaWfQeCmywudN1yd9AU7bR01iVOoUcK6K9UzE5PjRVLleV8gR8yL0Zs0mCIYgT\no9ZUZ9tHAgMBAAECggEAHYEXaFBXr/G+9wv/VqwrpFTuKxITcc23xDBamKDbz2/n\nhF0KEugsF7eHozj11h0YhBC662U08WR7zES9Rqv4Pjd/EPSha1MDlC5MV3EnlZDd\nz+MylGRm1oaO/7ndXbyJqE8t9HtfDInJjF7A4ksjuaPjJD9pTgzk/lb6KywLDiaH\nfCf/dSJxw7uDaiyDeH3u0/A95Uin19HO+nNSZC6UMSpmG1tZgFOr8PdbNqjaVfmJ\nNBmmAuhOyYBmFSzA/ocGoYO7fnGiy/5AKzIJCxhO0mtA+Vcs7Se0Io/hX1Z16lis\nAbW7Fl38EzM2OvTqPLOVlBrGoTLeJy00devNFB8k+QKBgQDd6m9bcNfgtLyiPzY4\n8xEjQKn7FCFxYIH/gfjtMc6XXXplH/3pcxNDOEW57YsHVrN1j0M8/OeYiLb6Zrs1\nfsqpRq67U2wYvkzsgW+uWDkwAOeBPpVJJavAe671t4BtFCpZ5BbqFGSiYXx6xnG4\nHP0AhU65whc9LXcpdK1yPDDiRQKBgQDJ2L7UBu2fUp5Q/OOHhilo9YCvEbDQw8qE\nBtMGsHDh/0/nicP1p9muWXJ7oVw0HKO2P/AXIK5xYBzdK8u74ztObPGZukJGBfHX\nNTLwlBuUNtkhCWK7pb7JxLZ0QiYisDzA/0kgQMF3z+uTGWas0xj2KtleILI7fopF\nWDuQCn7mGwKBgQDL9LAeAYtXSaVpFOG326YvmTngujK2ajVwaLso/TLbqR1ZndqW\n2Z2llS14YZr6xrOvY1kvz1znsxdA8nQzCXInu//RyS07XIOEhr3nJcyBkwMypRs9\nnDLLeKFn0hxlpDf8YAazYsTO/PwUNxjDV1ksRlkBnyIOpx+y6TqUGD/xZQKBgDx6\nCJMWkFPQOUcivjl45Sdhh3Ds6AFk6GSudsPmUawlBxfkmyYbaIlom3iXXDzw58xP\nU+xaCmpF1eAeoyhkaPySf8EDoZ/BYDiO4/hZJ/o8hMn1OfPnMUba/Z/PwgVasJlS\n4+IaBN2VGow0bCMUDMKVDBO70CsrOtqUGSSLQIJJAoGBANEJ4Bo+O2KmJoRECGhF\n/CpVNa9hpk4A9iv2dbD8ArNn+h930kLxMe7VApD+igNalHHJ8DHsidRUmraZ2gyW\ncAiSKeF3DRYFUafD78mtdI5LvgCjtxZdi2IA3KGgmcHq/Xoc4OSV5ouVHZ1AjHYZ\nQbt+jFLb2Kzu9pZaKFkXrHPh\n-----END PRIVATE KEY-----\n",
                "client_email" => "firebase-adminsdk-ehb70@mudarribe-fitness.iam.gserviceaccount.com",
                "client_id" => "116336733087150749989",
                "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
                "token_uri" => "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-ehb70%40mudarribe-fitness.iam.gserviceaccount.com",
                "universe_domain" => "googleapis.com"
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
