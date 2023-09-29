FROM debian:12.1

RUN apt-get -y update && \
    apt-get -y install haproxy && \
    mkdir run/haproxy/

CMD ["haproxy", "-f", "/etc/haproxy/haproxy.cfg", "-W", "-db"]