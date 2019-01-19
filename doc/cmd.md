# K8S Tool cmd
[TOC]
## Delete Running pod
```shell=
kubectl delete $(kubectl get po --field-selector=status.phase==Running -o name)
```
## Read quick
```
kubectl get netpol //get network policy
```

## Check etcd master
```
ETCDCTL_API=3 etcdctl \
 --write-out=table \
 --cacert=/etc/etcd/ssl/etcd-ca.pem \
 --cert=/etc/etcd/ssl/etcd.pem \
 --key=/etc/etcd/ssl/etcd-key.pem \
 --endpoints="https://10.241.2.10:2379,https://10.241.2.12:2379,https://10.241.2.13:2379" \
 endpoint status
```

## Creat sample pod by "cmd"
```shell=
kubectl run -h
kubectl run NAME --image=image [--env="key=value"] [--port=port] [--replicas=replicas] [--dry-run=bool]
[--overrides=inline-json] [--command] -- [COMMAND] [args...] [options]

# Example
kubectl run centos --image=centos -- /bin/bash
kubectl run nginx --image=nginx --replicas=1
kubectl run --image=nginx nginx-app --port=80 --env="DOMAIN=cluster"
kubectl run --image= nvidia/cuda:9.0-devel-ubuntu16.04
kubectl run busybox --rm -ti --image=busybox /bin/sh

# nginx 
kubectl run nginx --image=nginx --replicas=1
kubectl --namespace=<insert-namespace-name-here> run nginx --image=nginx
//create svc
kubectl expose deploy nginx --type=NodePort --name=nginx-svc --port=80 
kubectl expose deploy nginx --type=NodePort --name=nginx-svc --port=80 --external-ip="100.67.165.108"


kubectl run nginx --image=nginx --replicas=2
kubectl expose deployment nginx --port=80
 
```
ref : https://www.kubernetes.org.cn/network-policy


## Docker save or load image by "tar"
適用於沒有網路的環境
ref: https://docs.docker.com/engine/reference/commandline/load/
```shell=
# Output docker
docker save --output nginx.tar {your image name or ID}

# Input docker
docker load < nginx.tar
docker load --input nginx.tar
docker load -i  nvcr.io-nvidia-cuda.tar
```

```
docker rmi $(docker images -f "dangling=true" -q)
docker rm -f $(docker ps -a -q)
docker rmi -f $(docker images -q)
```

## docker remove none image
```
docker rmi $(docker images | grep "<none>")
```
Ref : https://www.kubernetes.org.cn/network-policy


