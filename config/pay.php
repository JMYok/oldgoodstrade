<?php

return [
    'alipay' => [
        'app_id'         => '2016092500590920',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzORw0SwidE00nKVsTDJx5E/wlY5/M0Pz+2XX3q93jdtwNEdfQUSNim+D2LOoDzTsgLggg9UZDy931Ha02wEInxqgeVUoYhhHA/zjwSs3vUoQMT0WTPcrxAoaqTBp0t0taPC3gSJ+TgHQvR5CxPG4TQ+lTOWDcIIyvNwO1rv8LIr7yKnCcgHgUKeCoJQsBjvpMud7bjiJO5s3VChi999KOn7x4peGmPPYdvAxfT0ijZNSXvTSzdEKUQywSbpbYIhYz1bwgK09E7NYMKR4drl8imbcPBHaFb+LjGoAINp4qsxIY8j41hSZaAcC/iNOoHGRxhwP68G7jM8kdbLYGnCLCQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEApYzqiZFZ978JN/lVvpdOO+Up+nPAKXv1qcv0p3dVhMUEo3i30GEhmxF2jUM3RUXvP1ynbrTflm7zR5LmigbjcRSIpjUd8UaFCJnRObHlYa92ZM/0w2AxQf/4CEdHgSg0V86bpgZzA+CEuKfa+loaFam7Rk3uC7a1YfFX/ZEW7VxLsAG7CapNRxyX5tfRaFpV6h9ASpYfKJPxXkx26az/s5Zblts/dS5AZmTCSPxd/HtSjXCp+APweV+cUBY4Y44pCGU2BzrwRQcgSyU+13+1ol65u8Ra54RDmBh70xGPeDIkRGed1ecp8MMoDKGGGCkaRepb6vp7pX85MMXi6c8elQIDAQABAoIBAHhfMdm9GhGNkgJlBPeDxJrAUfmNWFfRjhpb9hQeLMxRBMJn8B9PwMOjuvOTwAhahU8o64UPdtNG8RVFtuL9hzqdl45iaNcaU3ihfwPYWdThY9CBdJLqymYW3B4I1fEPbp+51mqtnctf4KDzS8Fk6jp+I3FHEKLrwo7okPYKHQWQPq7Di023zaMDW11/lL8MONDRCvFUnJJC15MRi2obNmGuKslHKSCVXNpATtExgDMlO0NP5zQKP1OlmWcl7iRc3Wzj/mfAsz5in83VMXJs07ZYXZ41gMb0MdNfPhPFt5PGKlCF3K/g6/BIYmNYuhfhatDj+hD0Z3sZGPjYNIP9kYECgYEA2A0H8pyHTD2LkyxCVSjB0+qDyOYBVd9YzoY0hAK2OfClwJe1xIiWvenuX0HfMCnJ/Mw/6sdgFzz0iGAJpFHRjcAw7Vh4aV+MmMX33wMBAbDA/I+JDwE06SCR64QGNlvEycJmbqJUCwoujvYpvZGRdciNvNBh//fD4Zy3AsEbMAkCgYEAxClmVbtnqlBIKFTsrRm/iGWKr0X7qn+JhMKDMA/oesf3IrmY3ScB5QmTSLIO7JmcIj4GdtYeuhEMWSDww7hIZ73e/1H0ABQZmgUYv6byfxBCXgxNslX716o2d0d7M9dECkvD3pCdLbjDjxNFUbAGqZH58vMQWN5xzlEc9xY7hS0CgYEAzu60RRDdmg18ySrkIdLWy5XcQajjcI9q7OyoEiTSyu4OpEfq5mH5F8+e7AgYsHXmLEaplcL+62MLyC9MLOHc94s0kbBiLHNDI/TBtA2Zgjf8sCr+mKuMNRpoCQ88MAZ3ltOm7qJ2ItjOvUlTs2lgzFKaR1XD97olGMvUkkPJOZkCgYBN66gT7CKMu+E97CYryKuVkchaQXFr08ebreyQvfD6PM6Fw7XeO218PqZ73Qciow4rZ/oHYJzKCpWeHgClrmFMnFalkzdahKF61gVzs+xl3t6OH1MJwTAOBjYmgYWGHT+Q23HNyiI1lExSXDRP851h5HOmNzlKI+qPKxdXa0RvbQKBgQCGew1Z8mHR4XEHdO3aXJ2xfoTpgQC7Zr/0QhyufhfYbYHiAbrtn3s+YdDdO42d1yautA592AVijAbkeiNOYWRBzByo/5O+MfCKPXX4BTe9Vxv96mdfQagW+oMes/tk2imYxlpuLpQvjgrdD23DFNAZIKS7+HorhyJwoPvAiS4pZg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];