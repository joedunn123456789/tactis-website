<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://sts.windows.net/7383114c-f72c-4481-8f66-d096d840bc10/'] = [
  'entityid' => 'https://sts.windows.net/7383114c-f72c-4481-8f66-d096d840bc10/',
  'contacts' => [],
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => [
    [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
    ],
    [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
    ],
  ],
  'SingleLogoutService' => [
    [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
    ],
  ],
  'ArtifactResolutionService' => [],
  'NameIDFormats' => [],
  'keys' => [
    [
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQE/V/TxcxCYhEutE0yAMCwDANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMTEyMTcwNjE2MzVaFw0yNDEyMTcwNjE2MzVaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApFv79hL2Q4Jwm2JzG4afkCTI5teASIVFvb4WftSfXd/biD9O+ybmOITExHYZxucqY8KCR9AQe6Vnqp0h+y7BNn8LNEKL0MwYVDxFNzeew1S9tp5p9j5H6ezv7DUqsGveLniKXBxYYGBDy/SpXN7pa8bAeTcXoAE+ryMLVM7IFLvrNG9ItMVglcrA9iTfNWqo4gQZU09UkTxSRloEZIAGDMmHC6BRYrhe51FkGIfp3NO3In2ReiKEDffJ/bMKDzVpQSZra/bjvj4CQJEyyi/D41lDRk4ZROEUQ3EvPbdjyW8rQovlN3sHFZsHdlEXy9T9alNifnTMr99hN7JoHYDQmQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAUWCneoiEkyJ0JgFEhx5pmOFV4xL+Pl+ZYjxpAAPvPDzQYfqRje2o92aknp8Rs4+p1hoXCs4KmJ9pqbiqFTG7OAFUKbznAHYbgB4gj4Ml8RSfzoclAV5A5CISfSxa4lryfOCKlf8Yl1AyIlAaQx0j6O3S/kLo/k43/PS6JWjuCVKnQlJHzFoQQIvgOxtP7C+O9r5Tp4BtkZWCIgqXCy/BiMCyeX63F534fZQqHws4XR7Ir3eSzb3ZUquEBUhAM1Al9rmNOb+QXwSfxrshpxbU3kY05X+cjBzy0H3e5hHhqbkhoDTjCQOhByP7O/kX8Thao0CRgOHOJRQnqij883swB',
    ],
    [
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQcmTz81CVmb5HM9F6vwzh/jANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yNDExMjAyMTU5MjVaFw0yNzExMjAyMTU4NDVaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxoK/yqWrCF7U2lqQK0cmgDSLayXhsf+FwNyYNGqICw4FZbRQTOQdQeF45z5kiN/xBvBr7gYBA+C5U/5VK2efiPbVzcuGHM/jM5jOWm2Cl763I1CDb3z/8lLxqYEChVPMeNKgm9qvKnHLMYMeu7yj5WvLZttq72/+igWOb/hT1CeFbosGUE44RhLgfY9+bdmxCBA5zoUrcuAIubMJ5irMpxDfZTO6OzFzIvNhTykk8u01eAHAWrT1r+I5Y2NS2QHDCHajh93VmyGpUGqDJQ5N0vk1SyvlkagaJk1Gyo3pUIxcIY05K5CvTgGdzjilTuUbodF7ZBHhi/zkWf0tX+aeOQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQDFADeERR+YeP/hmYWKtjGX1R2OZ0HdVfkIsQ5wmqjn0P58XAk9R/U8+oRsN5knfMeV1J61sL0bw5E7gDJlbWMBDoW8eT/ggWr2pZCJNKVfNNg+hbJUY5vGLvpSei3NyTuFWeOBsKEZ99AC/+boEAOfZHHns27k0ejN++71ccDg9oId79y02EJOv0L7kc1hCeHb53msshBf0M0pJI51rKvKyc6A2pI9hvpHF69mSBjAMgqh68pt4CWFxWIIiuhE+dZbNSVLvgCN1KuMLngFNnZ6ZuTfOV2/g/73Xv/llqv4wPV9T9B6H9xQZFiB47XA/uEcIgV0F8l2tQHAbZ2Hvg8r',
    ],
  ],
];

if (getenv('AH_SITE_ENVIRONMENT') == 'dev') {
  $metadata['https://sts.windows.net/7383114c-f72c-4481-8f66-d096d840bc10/'] = [
    'entityid' => 'https://sts.windows.net/7383114c-f72c-4481-8f66-d096d840bc10/',
    'contacts' =>
      [
      ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
      [
        0 =>
          [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
          ],
        1 =>
          [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
          ],
      ],
    'SingleLogoutService' =>
      [
        0 =>
          [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
          ],
      ],
    'ArtifactResolutionService' =>
      [
      ],
    'NameIDFormats' =>
      [
      ],
    'keys' =>
      [
        0 =>
          [
            'encryption' => FALSE,
            'signing' => TRUE,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQK8NgxWw2sYlKX/PZ+thSojANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMTEyMTYyMDI3MjJaFw0yNDEyMTYyMDI3MjJaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyh+JPwpSrtJIUnWUE12g9rbVE0NB5dz0JTmsvKs7DFLjgPP7a8/p7tm7SBjKL/qR+Eetl1azBm3Lzt3Si5LH0G0Rz7xBgh0ANAC8wdJdBMKsMME+HO0hnySicPxwqDyWy/v4HhxpjinPeCjW8kzmfZWxUg+8PRye7Uol0S2oh5ue4K/dNJGvFs/7c6j1V5CTs3UyjrjpWi9iKU0aj/9ddwO97r+IlzymT7XZfBDpaZhMQ7WQGR4t8wbHtOjcnNmoeFATSh9w3OyR0zU7oIT2Sf7k+iYVh9Gao/XJVpwB5wwMRmGe1on8JWV9b3GiTrn377zeuk4NycNd7MMpjTDonQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAOnPvJfKGbJGeamkSFB5aPuHlXiR0WveXL0TN9gSomk1q1figHbw96fcOU6rTINwEuSeSqVXO1AkNEwes2fh9cdqP8x5wMOqx9KJP5i1nCWlVWJdCOsCVzY3OBHiaKOV/U2kacOsYEEipzkAHHP/9PWjcwesqHAh9AX7a35Izb7pgIrosDL1RBVqrTEXV9+/cZwjq/5c09hc9778+tQYB0nX+qn23PnIYxtEiENlmxCtClGFDPUt97BUEcjvuVAWHi7WRU5QDoaPOCstWh0FWoRfT/6tCdWV6uWAivqvi/cz4ADKuADF+0eCG1HhG9dyy4iXY89phYfEDx1GK+yZVa',
          ],
      ],
  ];
}

if (getenv('AH_SITE_ENVIRONMENT') == 'test') {
  $metadata['https://sts.windows.net/7383114c-f72c-4481-8f66-d096d840bc10/'] = [
    'entityid' => 'https://sts.windows.net/7383114c-f72c-4481-8f66-d096d840bc10/',
    'contacts' =>
      [
      ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
      [
        0 =>
          [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
          ],
        1 =>
          [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
          ],
      ],
    'SingleLogoutService' =>
      [
        0 =>
          [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/7383114c-f72c-4481-8f66-d096d840bc10/saml2',
          ],
      ],
    'ArtifactResolutionService' =>
      [
      ],
    'NameIDFormats' =>
      [
      ],
    'keys' =>
      [
        0 =>
          [
            'encryption' => FALSE,
            'signing' => TRUE,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQZJjz30OLVZBEbPNofGlAYjANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMTEyMTcwNTA5NDFaFw0yNDEyMTcwNTA5NDFaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxLrL4ozjSwdo5iL4XhnQsxP76FW4crSRvjp5jGioYkTfkC/lsQmUGtnGLu0EywYaSBiI6ewc9EBjYwdgUSkEAojNr/Iro0oyUEpKyaNjWQktHwr0smBT0zxrDwUmO5c8umS7GJKZOkAFWKpwxGnXbCYBpOKB07kcv+fGCim2R6QpMQ1DsRJxRYcD+HCWOXYAslJysvWoLp8Udi/UpvJK2asNJu374lgcFW1zk4lNRZEEopSXPZ9/ZSKUilwvvaRbbdS7pYv0ZxOxqarO0hV5lqUkMe8NhDCuAgh5Vve0f5A9qWtXf1cXyWKV+zg5wz5scbcQeNiI9OK1g1heYVzaWQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAPnGAnKkRRAyQzqJfMqOC4Mh68rQ/P2f6q8EDzOHKtfGNBT1uc0z2t9GxfSHp0d4YI6LgektclZqVB2A6Nb4JnmmQ76Ep1wmTeuqWwj3JOeMKLLSLU3c10vHARedjlMNfUfEJxWCrN0dsustPRJkg3Ebpzs6jdDEIBetyUFMJpARhtRuFbqc5oLVKbkZAAACoyB4C//qgKHvjBxVrHkdTkfzNANxfoIbonqtxjTLyA/FmJb37UMKGJSN9rNtUgxlZjfB0Fjwu0MTpN4TrXqH/AXYSHbqY7fysSqHN+N4PZsAWsmQlk/xGdG15hdwA9OjnsO5VVQsBCFxcVEt5WsdLW',
          ],
      ],
  ];
}
