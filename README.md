# mead-well.com Store

## Installation

Install `http-server` to serve up the site locally.

```bash
$ npm install -g http-server
```

Run `http-server`
```bash
$ http-server
```

Visit http://localhost:8080.

## Deployment as S3 Bucket (option 1)

Upload files to AWS S3 Bucket. Enable static webiste hosting. 

## Deployment to Ubuntu server (option 2)

Clone repo to home directory

Create a symlink to the Nginx config file
```bash
$ cd /etc/nginx/sites-enabled
$ sudo ln -s ~/meadwell/config/meadwell.conf /etc/nginx/sites-enabled/
```

Restart Nginx
```bash
$ sudo service nginx restart
```
