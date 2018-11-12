```shell=
docker run -d -P --name test_sshd acinwinstack/ubuntu16.04:ldap
docker exec -ti test_sshd bash
```
Install ldap server
```shell=
sudo apt-get update
sudo apt-get -y install libnss-ldap libpam-ldap ldap-utils nscd
```

1. modify file
```shell=
vim /etc/ldap.conf
uri ldap://172.19.79.84
port 1389
base dc=iam,dc=nchc,dc=org,dc=tw
#binddn cn=ldapadm,dc=itzgeek,dc=local
#bindpw azazaz
```
2. restart service
```shell=
service nscd restart
```
3. test
```shell=
ldapsearch -xb '' -s base + -H ldap://172.19.79.84:1389
getent passwd slurmuser
```
```shell=
docker stop test_sshd && docker rm test_sshd
docker rmi ssh:ldap
```
