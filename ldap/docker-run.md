```shell=
docker run -d -P --name test_sshd acinwinstack/ubuntu16.04:ldap
docker exec -ti test_sshd bash
```

1. modify file
```shell=
vim /etc/ldap.conf
uri ldap://172.19.79.84
port 1389
```
2. restart service
```shell=
service nscd restart
```
3. test
```shell=
getent passwd slurmuser
```
```shell=
docker stop test_sshd && docker rm test_sshd
docker rmi ssh:ldap
```
