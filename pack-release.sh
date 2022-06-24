#!/usr/bin/env bash

mkdir -p release/MyCustomizations
rsync -avz --exclude release \
           --exclude .git \
           --exclude .idea \
           --exclude node_modules \
           ./. \
           release/MyCustomizations

cd release
tar czvf MyCustomizations.tar.gz *