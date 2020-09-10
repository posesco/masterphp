FROM haproxy:2.3-dev-alpine
COPY haproxy.cfg /usr/local/etc/haproxy/haproxy.cfg
ENV USER=haproxy
ENV UID=12345
RUN adduser \
    --disabled-password \
    --gecos "" \
    --home "$(pwd)" \
    --no-create-home \
    --uid "$UID" \
    "$USER"
RUN mkdir /var/lib/haproxy/