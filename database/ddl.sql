CREATE SCHEMA places;
CREATE SCHEMA admin;
CREATE SCHEMA commons;
CREATE SCHEMA customer_base;

CREATE TABLE places.countries
(
    id           integer GENERATED ALWAYS AS IDENTITY,
    name         character varying,
    abbreviation character varying,
    created_at   timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at   timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at   timestamp without time zone
);

CREATE TABLE places.regions
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    country_id integer,
    name       character varying,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone,
    FOREIGN KEY (country_id) REFERENCES places.countries (id)
);

CREATE TABLE places.states
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    region_id  integer,
    name       character varying,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone,
    FOREIGN KEY (region_id) REFERENCES places.regions (id)
);

CREATE TABLE places.cities
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    state_id   integer,
    name       character varying,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone,
    FOREIGN KEY (state_id) REFERENCES places.states (id)
);


CREATE TABLE admin.account_status
(
    id          integer GENERATED ALWAYS AS IDENTITY,
    status      character varying,
    description text,
    created_at  timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at  timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at  timestamp without time zone
);

CREATE TABLE commons.companies
(
    id           integer GENERATED ALWAYS AS IDENTITY,
    name         character varying NOT NULL,
    trading_name character varying NOT NULL,
    created_at   timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at   timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at   timestamp without time zone
);

CREATE TABLE admin.customers
(
    id                integer GENERATED ALWAYS AS IDENTITY,
    company_id        integer NOT NULL,
    account_status_id integer NOT NULL,
    obs               text,
    created_at        timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at        timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at        timestamp without time zone,
    FOREIGN KEY (company_id) REFERENCES commons.companies (id),
    FOREIGN KEY (account_status_id) REFERENCES admin.account_status (id)
);

CREATE TABLE commons.types_of_documents
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    type       character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone
);

CREATE TABLE commons.documents
(
    id               integer GENERATED ALWAYS AS IDENTITY,
    document_type_id integer,
    doc_type_id      character varying NOT NULL,
    created_at       timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at       timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at       timestamp without time zone,
    FOREIGN KEY (document_type_id) REFERENCES commons.types_of_documents (id)
);

CREATE TABLE commons.company_documents
(
    company_id  integer NOT NULL,
    document_id integer NOT NULL,
    PRIMARY KEY (company_id, document_id),
    FOREIGN KEY (company_id) REFERENCES commons.companies (id),
    FOREIGN KEY (document_id) REFERENCES commons.documents (id)
);

CREATE TABLE commons.users
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    name       character varying NOT NULL,
    email      character varying NOT NULL,
    company_id integer,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone,
    FOREIGN KEY (company_id) REFERENCES commons.companies (id)
);

CREATE TABLE customer_base.addresses
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    city_id    integer,
    CEP        character varying NOT NULL,
    line1      character varying NOT NULL,
    line2      character varying,
    obs        text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone,
    FOREIGN KEY (city_id) REFERENCES places.cities (id)
);

CREATE TABLE customer_base.routes
(
    origin_address_id      integer NOT NULL,
    destination_address_id integer NOT NULL,
    distance               float,
    obs                    text,
    created_at             timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at             timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at             timestamp without time zone,
    PRIMARY KEY (origin_address_id, destination_address_id),
    FOREIGN KEY (origin_address_id, destination_address_id) REFERENCES customer_base.addresses (id)
);

CREATE TABLE customer_base.offers
(
    id              integer GENERATED ALWAYS AS IDENTITY,
    start_at        timestamp without time zone,
    end_at          timestamp without time zone,
    scheduled_start timestamp without time zone,
    scheduled_end   timestamp without time zone,
    created_at      timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at      timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at      timestamp without time zone
);

CREATE TABLE customer_base.bids
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    offer_id   integer NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone,
    FOREIGN KEY (offer_id) REFERENCES customer_base.offers (id)
);

CREATE TABLE customer_base.password_resets
(
    token      character varying                                     NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    email      character varying                                     NOT NULL
);

CREATE TABLE customer_base.permissions
(
    id         integer GENERATED ALWAYS AS IDENTITY,
    key        character varying NOT NULL,
    name       character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE customer_base.roles
(
    id           integer GENERATED ALWAYS AS IDENTITY,
    name         character varying NOT NULL,
    display_name character varying NOT NULL,
    created_at   timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at   timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at   timestamp without time zone
);

CREATE TABLE customer_base.products
(
    id          integer GENERATED ALWAYS AS IDENTITY,
    name        character varying,
    description character varying,
    created_at  timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at  timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    deleted_at  timestamp without time zone
);