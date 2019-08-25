FROM debian:buster

RUN set -e && \
    export DEBIAN_FRONTEND=noninteractive && \
    apt-get update -y && \
    # node & npm & markdownlint
    apt-get install -y git wget vim gnupg  && \
    wget -q -O /tmp/node12 https://deb.nodesource.com/setup_12.x && \
    bash /tmp/node12 && \
    apt-get install -y nodejs && \
    npm install "markdownlint-cli@^0.10.0" --global && \
    # python3 & pip3 & mkdocs
    apt-get install -y python3-pip && \
    pip3 install mkdocs mkdocs-material markdown_include && \
    rm -rf /var/lib/apt/lists/*

EXPOSE 8000

ENTRYPOINT ["/bin/bash", "/usr/local/bin/mkdocs", "/usr/bin/markdownlint"]
