vcl 4.0;

backend default {
    .host = "nginx-service";
    .port = "80";
}

sub vcl_backend_response {
     set beresp.grace = 60m;
     set beresp.keep = 0m;
}