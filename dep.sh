#!/bin/bash

# read .env variables
set -o allexport
source .env
set +o allexport

home="/data/sites/$deployId/$deployId"
yel=$'\e[1;33m'
end=$'\e[0m'
echo "Password for ${yel}${DEPLOY_SERVER}${end}:"
read -s pwd

ssh $DEPLOY_SERVER /bin/bash << EOF
cd $DEPLOY_PATH
echo $pwd | sudo -S -u $DEPLOY_ID -- bash -c "HOME=$DEPLOY_HOME;shopt -s expand_aliases;source ./deploy.sh"
EOF
