#Protocol SPECS
Any implementation MUST follow this specs.

## P2P Discover
![Discover diagram](http://www.plantuml.com/plantuml/png/TP0n2y9038Nt_8hGtGwE3b9GT70fw2v76_4WlIkvLEc_DsqFh8DRalVntYDLKYSwT0oWNfcmtjRteqzDV960QpGA5WVs5BI0tb3V-Du5nPCFxPUuaXXV02meRlOPmDqyO4y6vvE92s_YJrnPbZSPKICEYT0nepu9kzWIf-dwc9pSx6KeP9DrrcHt5YBz9rv2V8VQ3DAgJIvjLSM6biSv8W5KjjblFW00)

```plantuml
@startuml

title P2P_Discover
actor "Client"
participant Finder
actor "Server"

Client -> Finder : Find peer
Finder -> Server : P2P_Discover
...Try to use all the models to find a peer...
Server -> Finder : P2P_Greet
Server -> Finder : P2P_KnownPeers
Finder -> Client : Friendly peers

@enduml
```

##FAQ
The specification terms:
- Weight
- Peer
- Pool
