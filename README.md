# Docker PHP Application Skeleton

Use this skeleton to build PHP development environment with Docker.

## Features

* Apache/2.4.10 (Debian) 
* PHP 5.6.26
* MySQL 5.7
* phpMyAdmin

## Usage

### Build

```bash
$ docker-compose build
```

or

```bash
$ make build
```

### Start

```bash
$ docker-compose up -d
```
or

```bash
$ make up
```

### Stop

```bash
$ docker-compose stop
```

or 

```bash
$ make stop
```

### Down

```bash
$ docker-compose down
```

or 

```bash
$ make down
```

### Bash into a running container in background mode

```bash
$ docker exec -it [CONTAINER_ID] /bin/bash -c "export TERM=xterm; exec bash"
```

or 

```bash
$ make shell ID=[CONTAINER_ID]
```

## Configure DNS forwarding to dev domain on Host machine

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

Setup dns resolver

```bash
$ sudo mkdir -p /etc/resolver
$ sudo bash -c 'echo "nameserver 127.0.0.1" > /etc/resolver/devel.com'
```

Test your dev environment

```bash
$ ping test.devel.com
```