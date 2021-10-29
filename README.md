# CloudFlare mTLS with PHP

Make a call with PHP to Endpoint that are secured with CloudFlare mTLS

## Firewall rules

The default CloudFlare firewall rules for mTLS didn't include the case where certificate is revoked. Hence, we need to set manually instead of using builder.


```
(http.host in {"mtls.wanzul.net"} and (not cf.tls_client_auth.cert_verified or cf.tls_client_auth.cert_revoked))
```