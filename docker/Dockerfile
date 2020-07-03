FROM debian:buster

RUN set -e && \
    export DEBIAN_FRONTEND=noninteractive && \
    apt-get update -y && \
    # node & npm & markdownlint
    apt-get install -y git wget vim gnupg  && \
    wget -q -O /tmp/node-installer https://deb.nodesource.com/setup_14.x && \
    bash /tmp/node-installer && \
    apt-get install -y nodejs && \
    npm install "markdownlint-cli@^0.10.0" --global && \
    # python3 & pip3 & mkdocs
    apt-get install -y python3-pip && \
    pip3 install mkdocs mkdocs-material markdown-include mkdocs-minify-plugin pymdown-extensions && \
    # clean up
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

EXPOSE 8000
