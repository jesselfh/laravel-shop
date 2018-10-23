<?php

return [
    'alipay' => [
        'app_id'         => '2016092200569723',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2TH0IbQ3l8I0Vr+Huvgq3kfW7EmniH83ZEjd04AKrFNnFn+Z3awkgUnWMpuAoXnj+2e5CZe6WMuBsE2K1VB4P9M/7MjKg/G9ltiLUcQDIrUtPOEEDmmTy6QWsV+3QVDXZmizoPrVa4eCDqrY2NQ3nGYkTLSz2B4r/PU34F3QbXAsvQZrEi5kTY/AklBhhnYuzHMI4y+aUqs2xATjJWNHYoGQ7tnn3e3DLtEoHcPsPdHywJNusva7flg77RRczn/fQrWQUcvcskovzAulwuhT1Lo1jdqigBXOogwUFm+MGaU+OfNKfxndFXzUWvvf3UK6M9s4AXg5zi+N0LOAhVL3hQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAs1/STRU4AGdvV9IlqgEZ9JYV2etjGArleKU5ozx8ODkMJa+zITPSQMYPvK8qbviYXgWykQ2bUyuAwhEKKvcqcofI/TsVfeMC8WoCeq6ZbiE6AYqMtj9fRd1J2PYgRIBK501gCBlLTXfU/fANopWQI4UmCRThtG16jgbYfSgnbg47+6FntWqc5ZOP36rnQ6HatzJBvuk1sX3HsFGH+D9YwW40Kiw9rj8yZOtkxhI1Rgkam+b+ebvA7eq6AfGo0NBlEmq5YKlFoz/zBjza+cbwK4GuIvUW+PaFJhXd8DWI0+KnMasd48O/0sGM+4bRKtUWTPf3ZeKsAwREOOQSjQqfoQIDAQABAoIBAQCK9m0iMpIUHg3wZ2mubvQAvFVpYiZ+9dIYyUgB4lYJ6Ig0mg2YZ2E3tTlz3/Br0EOac6eHIJd4s3co4bKS3rEP0YowRJm90STyikIpcSKEY1Fg6Eli122j3m/bmbId35Yn45XGMHJaLb/gixzFHEFygzCYUIkbEsWjSkJlk7oYU7nQftRDss5afUjKUQkrlBYuq0OS1kwpfN4Zq40b7eelNLEF0jyqgb2jRdjiIItpZJnc0lt2ZLaako9AHX5dmcZmtcYhOthUZB8S0N0U/VkV4T/PtlQOA+qsmV7xxctgP7qVp3NA7hp5W8Hl1gchBWVUyNgK5sErGRXQfrXCT/pRAoGBAOabD7EObjWUhE5QR1Qccb5NvpgHkxf+NDWDPrJ07tdwd277PeFWUZ2tAhchfxWEJr3ZEV/Wr4IwwU/RLODe0UCy8fyJ+u93VK5gitLDzrWgG/Sl6/6Yt/Q3Ro+IA2OdrmeSz/zUbaRQLBqMGxFnaM1kYe7JNA5CS/crg85GLUS/AoGBAMcggq8d3UXpMXIMJIfGX1EZO+fYUqHD8QNEzb4Zjiml2hRKxHppPaEd8mYG3obUTE/OP69VLQ3qEkWxKICSvVoj1QuKnsyGVSLE9QMzHRYfucIyR6jNMf9kxpNY/CscX2UgjMor8uGHMO4zrpARxnywxMKWhD3cqYhw2EyAHVOfAoGAZ8RKkU9/BBkqV9sD3bNW810kcGCoLdmzQIkoQ0Ee4E65T3U6aRVgcGUTVbk66EGo9TCiAtAl9Z1evz3Oxfk9i7F59jtYcTzvG/BRR3nYoB3Ftpaa1Nt/myLsW1XGwKKJgg2sDYbBN3jj/6Yf3/r6S8Hp13suM2RdroEkNEObxx0CgYBLZD62aJs3dfP3lytZkLzT6rbor9mRT6t3rlwrZmeR0y5/UlOTeTcRQlJdWKp15/lAmfk4vAoD46SpaErKa0Rv1XM7HG/FRfMD6AhP/tE7aCWfpgPFoHMWnCQm86D9/Y8MrcdAYGVkCBh5h23HNEOvQAovFmfZOCuj8f2i8TqpRwKBgBNgb8K+joWqR0pOnBpB+i+KNMZLjLv6fdGKg4XTBskVFdBxMOUcbDLa97++PaXZudAW6diNvjEm2897XxRcL9kvm8aIiY66IT3LbRb4PtKLJgArJY9AhXMjnU2mnrOm4cZqVzNGoo+u4ehZtYbY1fDqHLUnHLeAztGlMJ6pKT1E',
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