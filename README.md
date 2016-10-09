# Configure DNS forwarding to dev domain

Install dnsmasq

```bash
$ brew install dnsmasq
```

Setup *.devel.com

```bash
$ echo 'address=/devel.com/127.0.0.1' > /usr/local/etc/dnsmasq.conf
```

Start it and ensure it auto-starts on reboot in the future

```bash
$ sudo brew services start dnsmasq
```

Setup dns resovler

```bash
$ sudo mkdir -p /etc/resolver
$ sudo bash -c 'echo "nameserver 127.0.0.1" > /etc/resolver/devel.com'
```

# Docker FAQ

## Build

```bash
$ docker-compose build
```

## Start

```bash
$ docker-compose up -d
```

## Stop

```bash
$ docker-compose stop
```

## How to get bash into a running container in background mode?

```bash
$ docker exec -it [CONTAINER_ID] /bin/bash -c "export TERM=xterm; exec bash"
```