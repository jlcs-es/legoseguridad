<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
//$metadata['https://openidp.feide.no'] = array(
//	'name' => array(
//		'en' => 'Feide OpenIdP - guest users',
//		'no' => 'Feide Gjestebrukere',
//	),
//	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',
//
//	'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
//	'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
//	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
//);
// 
// $metadata['http://saml.org31/saml2/idp/metadata.php'] = array (
//     'entityid' => 'http://saml.org31/saml2/idp/metadata.php',
//     'contacts' =>
//         array (
//         ),
//     'metadata-set' => 'saml20-idp-remote',
//     'SingleSignOnService' =>
//         array (
//             0 =>
//                 array (
//                     'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
//                     'Location' => 'http://saml.org31/saml2/idp/SSOService.php',
//                 ),
//         ),
//     'SingleLogoutService' =>
//         array (
//             0 =>
//                 array (
//                     'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
//                     'Location' => 'http://saml.org31/saml2/idp/SingleLogoutService.php',
//                 ),
//         ),
//     'ArtifactResolutionService' =>
//         array (
//         ),
//     'keys' =>
//         array (
//             0 =>
//                 array (
//                     'encryption' => false,
//                     'signing' => true,
//                     'type' => 'X509Certificate',
//                     'X509Certificate' => 'MIIDdTCCAl2gAwIBAgIJAJO/XH8TLlkMMA0GCSqGSIb3DQEBBQUAMFExCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJOQzEPMA0GA1UEBwwGV2F4aGF3MQ8wDQYDVQQKDAZGaWxsdXAxEzARBgNVBAMMCnNhbWwubG9jYWwwHhcNMTQwNzAyMDIxMjE5WhcNMjQwNzAxMDIxMjE5WjBRMQswCQYDVQQGEwJVUzELMAkGA1UECAwCTkMxDzANBgNVBAcMBldheGhhdzEPMA0GA1UECgwGRmlsbHVwMRMwEQYDVQQDDApzYW1sLmxvY2FsMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnYydqp48b0iW7nccjr6vW4CjmAgNZX+nfnRw1gs68OS2FORI4trSUNk9ZQw9GA9WiWIMMe6SomT+cbU6RiFQpLqigO56RbOgSBXClxN81hjB94OSHDhH0le1uT8nB8MbDMIOVhsRp15kNqpIu5fA+ZX2dti/sdSzn/wCq7H/yIpnqsnFRjVdAybGopFLuBO5EoGDW0s8okRFp7iVQajoksy0lWvHgTDzwfciRogCaKLg85WlU5poDewjE0STnpnXV5sSpcTM+c3A10A0Tt2lTXzV67iMEE6xE5xzJtdvWsoOQkcns0G+V310peZ9TOjaHKGgQVjSiCtSmYZukm7e+QIDAQABo1AwTjAdBgNVHQ4EFgQUngWMgRGmQJl131w2nmYUIRcy2v4wHwYDVR0jBBgwFoAUngWMgRGmQJl131w2nmYUIRcy2v4wDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOCAQEAaf6NewMn28axMIxZetsrh2fYsvDSe+yo7ICJBhduE3TiYn5UbLXArlHgBR9gzYrQcwsQPUEKZhcuyky/vvSTykEhgHBhyQBmZpOfuc5ihQ11AWkA2GxQVxkZnemR8HEGgkg+NrMhAf6TiAqifFzsqi5IujJHqCQgPoF53KwH2zadqdM/f1+Jl9/CrBeMS4pX98/VQorBivsgpYcDkxF+rF/JfO2aU91nFKiIr4GeJrBqzJmYpWTR4jPYSRXN/ORmaE103bDtLhok5YkwKZpw28Iw8p1TkMe27kSa56gxqE/1Rr/YA6xTgk3eZhbdFpkaZUP42e0ZCde0BXdYRFSorg==',
//                 ),
//             1 =>
//                 array (
//                     'encryption' => true,
//                     'signing' => false,
//                     'type' => 'X509Certificate',
//                     'X509Certificate' => 'MIIDdTCCAl2gAwIBAgIJAJO/XH8TLlkMMA0GCSqGSIb3DQEBBQUAMFExCzAJBgNVBAYTAlVTMQswCQYDVQQIDAJOQzEPMA0GA1UEBwwGV2F4aGF3MQ8wDQYDVQQKDAZGaWxsdXAxEzARBgNVBAMMCnNhbWwubG9jYWwwHhcNMTQwNzAyMDIxMjE5WhcNMjQwNzAxMDIxMjE5WjBRMQswCQYDVQQGEwJVUzELMAkGA1UECAwCTkMxDzANBgNVBAcMBldheGhhdzEPMA0GA1UECgwGRmlsbHVwMRMwEQYDVQQDDApzYW1sLmxvY2FsMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnYydqp48b0iW7nccjr6vW4CjmAgNZX+nfnRw1gs68OS2FORI4trSUNk9ZQw9GA9WiWIMMe6SomT+cbU6RiFQpLqigO56RbOgSBXClxN81hjB94OSHDhH0le1uT8nB8MbDMIOVhsRp15kNqpIu5fA+ZX2dti/sdSzn/wCq7H/yIpnqsnFRjVdAybGopFLuBO5EoGDW0s8okRFp7iVQajoksy0lWvHgTDzwfciRogCaKLg85WlU5poDewjE0STnpnXV5sSpcTM+c3A10A0Tt2lTXzV67iMEE6xE5xzJtdvWsoOQkcns0G+V310peZ9TOjaHKGgQVjSiCtSmYZukm7e+QIDAQABo1AwTjAdBgNVHQ4EFgQUngWMgRGmQJl131w2nmYUIRcy2v4wHwYDVR0jBBgwFoAUngWMgRGmQJl131w2nmYUIRcy2v4wDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOCAQEAaf6NewMn28axMIxZetsrh2fYsvDSe+yo7ICJBhduE3TiYn5UbLXArlHgBR9gzYrQcwsQPUEKZhcuyky/vvSTykEhgHBhyQBmZpOfuc5ihQ11AWkA2GxQVxkZnemR8HEGgkg+NrMhAf6TiAqifFzsqi5IujJHqCQgPoF53KwH2zadqdM/f1+Jl9/CrBeMS4pX98/VQorBivsgpYcDkxF+rF/JfO2aU91nFKiIr4GeJrBqzJmYpWTR4jPYSRXN/ORmaE103bDtLhok5YkwKZpw28Iw8p1TkMe27kSa56gxqE/1Rr/YA6xTgk3eZhbdFpkaZUP42e0ZCde0BXdYRFSorg==',
//                 ),
//         ),
//     'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
// );
$metadata['http://saml.org31/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://saml.org31/saml2/idp/metadata.php',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://saml.org31/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://saml.org31/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIDwzCCAqugAwIBAgIJAMOt2hzOUbDjMA0GCSqGSIb3DQEBCwUAMHgxCzAJBgNVBAYTAkVTMQ8wDQYDVQQIDAZNdXJjaWExDzANBgNVBAcMBk11cmNpYTEeMBwGA1UECgwVVW5pdmVyc2lkYWQgZGUgTXVyY2lhMRIwEAYDVQQLDAlTZWd1cmlkYWQxEzARBgNVBAMMCnNhbWwub3JnMzEwHhcNMTYwNDAxMTM0MzQxWhcNMTcwNDAxMTM0MzQxWjB4MQswCQYDVQQGEwJFUzEPMA0GA1UECAwGTXVyY2lhMQ8wDQYDVQQHDAZNdXJjaWExHjAcBgNVBAoMFVVuaXZlcnNpZGFkIGRlIE11cmNpYTESMBAGA1UECwwJU2VndXJpZGFkMRMwEQYDVQQDDApzYW1sLm9yZzMxMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4+SbbDqxy/sqQ2auROZnk53c9clmap13kmUcxWrJ9JMtQ3ApXivMVtvVD9Tid0CSd05517U5XbL3JxW2wvLjDDLPhVbEl6JLBsN/mWasa8EUJjiWcPYBrPNxcqF3Rc2ZmzhkyohUvYB5vo86bBwVldBcOWWd4+3e6mpf2PD7pdVRZ5+V9+0uyY2oLf/TygXP51ETtINBdi34hud3Zq14jgOIceqheli9W3A9P+KK0RffX1WrnIyNDS/UhKWAaSC2W79QfjUdCOSzPAfDTENUaM/MOgdRP6LXlyFElOtWKqemEe63ARsNlCbuZRsskxkbs098jw1wxhjAseBrPmQhkQIDAQABo1AwTjAdBgNVHQ4EFgQU5LZLndhx1S4WT0a2mxHVJ42uLGAwHwYDVR0jBBgwFoAU5LZLndhx1S4WT0a2mxHVJ42uLGAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEA2wkvw5zk+DYD/9f8Ezc35bpXPZLxH6weKpCMTmnDwB9DU2mHfkP6eOTPPbGCUN/HQ19otOSSj9A3Qf3km1nGupRA4wtuTvCfOyJvnZZbswoqqs2WbG8JkHMXv5Fu9kWxyMnkRUhCuRd2pP4uEGKNFJHZJrcj+qngtKv1AHC3Ts6YPMCiDVexTrhSMy+GDxt1UYPvL1zrohK0/W/RCostVTQucCdESL6MA7FAIfbvLWJcveUmYhiVosAiRgPW52InOnZBnUkO73YpePvny+9zfa1YMm7ojXvxLq/tswuIvbaaiZMhrr4TMxvYJQCPz0rIzwZRUILkjw3XFlhLl+n5Xw==',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);
