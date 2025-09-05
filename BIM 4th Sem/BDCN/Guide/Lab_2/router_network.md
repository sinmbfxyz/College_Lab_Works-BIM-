# Lab 2



**Router 1:** 



enable

config t

interface gigabitethernet 0/0

ip address 192.168.100.102 255.255.255.0

no shutdown

exit



**Router 2:** 



interface gigabitethernet 0/0

ip address 192.168.200.102 255.255.255.0

no shutdown

exit



**Connection between routers:**

For router 1:

interface gigabitethernet 0/1

ip address 10.0.0.1 255.0.0.0

no shutdown 

exit



For router 2:

interface gigabitethernet 0/1

ip address 10.0.0.2 255.0.0.0

no shutdown

exit



**Provide route:**

For router 1:

router(#config): ip route 192.168.200.0 255.255.255.0 10.0.0.2



For router 2:

router(#config): ip route 192.168.100.0 255.255.255.0 10.0.0.1









