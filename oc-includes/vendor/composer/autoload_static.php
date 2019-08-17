<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b0b4fafd693b0d76015f213169bd812
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'i' => 
        array (
            'ioncube\\phpOpensslCryptor\\' => 26,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'ioncube\\phpOpensslCryptor\\' => 
        array (
            0 => __DIR__ . '/..' . '/ioncube/php-openssl-cryptor/src',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
        'H' => 
        array (
            'Hybrid' => 
            array (
                0 => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth',
            ),
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'Hybrid_Auth' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php',
        'Hybrid_Endpoint' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Endpoint.php',
        'Hybrid_Error' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Error.php',
        'Hybrid_Exception' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Exception.php',
        'Hybrid_Logger' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Logger.php',
        'Hybrid_Provider_Adapter' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Adapter.php',
        'Hybrid_Provider_Model' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model.php',
        'Hybrid_Provider_Model_OAuth1' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model_OAuth1.php',
        'Hybrid_Provider_Model_OAuth2' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model_OAuth2.php',
        'Hybrid_Provider_Model_OpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model_OpenID.php',
        'Hybrid_Providers_AOL' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/AOL.php',
        'Hybrid_Providers_Facebook' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Facebook.php',
        'Hybrid_Providers_Foursquare' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Foursquare.php',
        'Hybrid_Providers_Google' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Google.php',
        'Hybrid_Providers_LinkedIn' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/LinkedIn.php',
        'Hybrid_Providers_Live' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Live.php',
        'Hybrid_Providers_OpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/OpenID.php',
        'Hybrid_Providers_Paypal' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Paypal.php',
        'Hybrid_Providers_Twitter' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Twitter.php',
        'Hybrid_Providers_Yahoo' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Yahoo.php',
        'Hybrid_Storage' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Storage.php',
        'Hybrid_Storage_Interface' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/StorageInterface.php',
        'Hybrid_User' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User.php',
        'Hybrid_User_Activity' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User_Activity.php',
        'Hybrid_User_Contact' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User_Contact.php',
        'Hybrid_User_Profile' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User_Profile.php',
        'LightOpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OpenID/LightOpenID.php',
        'OAuth1Client' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth1Client.php',
        'OAuth2Client' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth2Client.php',
        'OAuthConsumer' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthDataStore' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthException' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthRequest' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthServer' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod_HMAC_SHA1' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod_PLAINTEXT' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod_RSA_SHA1' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthToken' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthUtil' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'PclZip' => __DIR__ . '/..' . '/pclzip/pclzip/pclzip.lib.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b0b4fafd693b0d76015f213169bd812::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b0b4fafd693b0d76015f213169bd812::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6b0b4fafd693b0d76015f213169bd812::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6b0b4fafd693b0d76015f213169bd812::$classMap;

        }, null, ClassLoader::class);
    }
}
