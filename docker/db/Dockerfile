FROM mariadb:10.6

COPY /src/db/schema.sql /docker-entrypoint-initdb.d/0.sql
COPY /src/db/seed.sql /docker-entrypoint-initdb.d/1.sql
