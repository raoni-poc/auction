--
-- PostgreSQL database dump
--

-- Dumped from database version 11.3
-- Dumped by pg_dump version 11.3

-- Started on 2019-07-29 10:03:54

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 6 (class 2615 OID 16394)
-- Name: customer_base; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA "customer_base";


ALTER SCHEMA "customer_base" OWNER TO postgres;

--
-- TOC entry 5 (class 2615 OID 16530)
-- Name: customers; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA customers;


ALTER SCHEMA customers OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 207 (class 1259 OID 16443)
-- Name: addresses; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".addresses (
    id integer NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".addresses OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 16441)
-- Name: addresses_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".addresses ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".addresses_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 209 (class 1259 OID 16448)
-- Name: cities; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".cities (
    id integer NOT NULL,
    name character varying,
    created_at timestamp without time zone,
    update_at timestamp without time zone
);


ALTER TABLE "customer_base".cities OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 16446)
-- Name: cities_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".cities ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".cities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 222 (class 1259 OID 16522)
-- Name: countries; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".countries (
    id integer NOT NULL,
    name character varying,
    abbreviation character varying,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".countries OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 16520)
-- Name: countries_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".countries ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".countries_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 220 (class 1259 OID 16502)
-- Name: distances; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".distances (
    id integer NOT NULL,
    km numeric
);


ALTER TABLE "customer_base".distances OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 16500)
-- Name: distances_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".distances ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".distances_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 215 (class 1259 OID 16478)
-- Name: emails; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".emails (
    id integer NOT NULL,
    email character varying,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".emails OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 16476)
-- Name: emails_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".emails ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".emails_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 217 (class 1259 OID 16488)
-- Name: offers; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".offers (
    id integer NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    start_at timestamp without time zone,
    end_at timestamp without time zone,
    scheduled_start timestamp without time zone,
    scheduled_end timestamp without time zone
);


ALTER TABLE "customer_base".offers OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 16486)
-- Name: offers_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".offers ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".offers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 199 (class 1259 OID 16404)
-- Name: password_resets; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".password_resets (
    token character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    email character varying NOT NULL
);


ALTER TABLE "customer_base".password_resets OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 16423)
-- Name: permissions; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".permissions (
    id integer NOT NULL,
    key character varying NOT NULL,
    name character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".permissions OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16421)
-- Name: permissions_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".permissions ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 213 (class 1259 OID 16468)
-- Name: phones; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".phones (
    id integer NOT NULL,
    number character varying,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".phones OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 16466)
-- Name: phones_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".phones ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".phones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 205 (class 1259 OID 16433)
-- Name: products; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".products (
    id integer NOT NULL,
    name character varying,
    description character varying,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".products OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16431)
-- Name: products_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".products ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 201 (class 1259 OID 16413)
-- Name: roles; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".roles (
    id integer NOT NULL,
    name character varying NOT NULL,
    display_name character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".roles OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 16411)
-- Name: roles_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".roles ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 218 (class 1259 OID 16496)
-- Name: routes; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".routes (
    address_id_origin integer,
    address_id_destination integer,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE "customer_base".routes OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 16458)
-- Name: states; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".states (
    id integer NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    name character varying
);


ALTER TABLE "customer_base".states OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 16456)
-- Name: states_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".states ALTER COLUMN id ADD GENERATED BY DEFAULT AS IDENTITY (
    SEQUENCE NAME "customer_base".states_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 198 (class 1259 OID 16398)
-- Name: users; Type: TABLE; Schema: customer_base; Owner: postgres
--

CREATE TABLE "customer_base".users (
    id integer NOT NULL,
    name character varying NOT NULL,
    email character varying NOT NULL,
    password character varying NOT NULL
);


ALTER TABLE "customer_base".users OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 16396)
-- Name: users_id_seq; Type: SEQUENCE; Schema: customer_base; Owner: postgres
--

ALTER TABLE "customer_base".users ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME "customer_base".users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 224 (class 1259 OID 16533)
-- Name: customer_schema; Type: TABLE; Schema: customers; Owner: postgres
--

CREATE TABLE customers.customer_schema (
    id integer NOT NULL,
    custormer_id integer NOT NULL,
    schema character varying NOT NULL
);


ALTER TABLE customers.customer_schema OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 16531)
-- Name: customer_schema_id_seq; Type: SEQUENCE; Schema: customers; Owner: postgres
--

ALTER TABLE customers.customer_schema ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME customers.customer_schema_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 226 (class 1259 OID 16538)
-- Name: customers; Type: TABLE; Schema: customers; Owner: postgres
--

CREATE TABLE customers.customers (
    id integer NOT NULL
);


ALTER TABLE customers.customers OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 16536)
-- Name: customers_id_seq; Type: SEQUENCE; Schema: customers; Owner: postgres
--

ALTER TABLE customers.customers ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME customers.customers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 2938 (class 0 OID 16443)
-- Dependencies: 207
-- Data for Name: addresses; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".addresses (id, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2940 (class 0 OID 16448)
-- Dependencies: 209
-- Data for Name: cities; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".cities (id, name, created_at, update_at) FROM stdin;
\.


--
-- TOC entry 2953 (class 0 OID 16522)
-- Dependencies: 222
-- Data for Name: countries; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".countries (id, name, abbreviation, updated_at, created_at) FROM stdin;
\.


--
-- TOC entry 2951 (class 0 OID 16502)
-- Dependencies: 220
-- Data for Name: distances; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".distances (id, km) FROM stdin;
\.


--
-- TOC entry 2946 (class 0 OID 16478)
-- Dependencies: 215
-- Data for Name: emails; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".emails (id, email, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2948 (class 0 OID 16488)
-- Dependencies: 217
-- Data for Name: offers; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".offers (id, created_at, updated_at, start_at, end_at, scheduled_start, scheduled_end) FROM stdin;
\.


--
-- TOC entry 2930 (class 0 OID 16404)
-- Dependencies: 199
-- Data for Name: password_resets; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".password_resets (token, created_at, email) FROM stdin;
\.


--
-- TOC entry 2934 (class 0 OID 16423)
-- Dependencies: 203
-- Data for Name: permissions; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".permissions (id, key, name, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2944 (class 0 OID 16468)
-- Dependencies: 213
-- Data for Name: phones; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".phones (id, number, updated_at, created_at) FROM stdin;
\.


--
-- TOC entry 2936 (class 0 OID 16433)
-- Dependencies: 205
-- Data for Name: products; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".products (id, name, description, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2932 (class 0 OID 16413)
-- Dependencies: 201
-- Data for Name: roles; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".roles (id, name, display_name, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2949 (class 0 OID 16496)
-- Dependencies: 218
-- Data for Name: routes; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".routes (address_id_origin, address_id_destination, created_at) FROM stdin;
\.


--
-- TOC entry 2942 (class 0 OID 16458)
-- Dependencies: 211
-- Data for Name: states; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".states (id, created_at, updated_at, name) FROM stdin;
\.


--
-- TOC entry 2929 (class 0 OID 16398)
-- Dependencies: 198
-- Data for Name: users; Type: TABLE DATA; Schema: customer_base; Owner: postgres
--

COPY "customer_base".users (id, name, email, password) FROM stdin;
1	Raoni	raonibs@gmail.com	fasdfasd
\.


--
-- TOC entry 2955 (class 0 OID 16533)
-- Dependencies: 224
-- Data for Name: customer_schema; Type: TABLE DATA; Schema: customers; Owner: postgres
--

COPY customers.customer_schema (id, custormer_id, schema) FROM stdin;
\.


--
-- TOC entry 2957 (class 0 OID 16538)
-- Dependencies: 226
-- Data for Name: customers; Type: TABLE DATA; Schema: customers; Owner: postgres
--

COPY customers.customers (id) FROM stdin;
\.


--
-- TOC entry 2963 (class 0 OID 0)
-- Dependencies: 206
-- Name: addresses_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".addresses_id_seq', 1, false);


--
-- TOC entry 2964 (class 0 OID 0)
-- Dependencies: 208
-- Name: cities_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".cities_id_seq', 1, false);


--
-- TOC entry 2965 (class 0 OID 0)
-- Dependencies: 221
-- Name: countries_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".countries_id_seq', 1, false);


--
-- TOC entry 2966 (class 0 OID 0)
-- Dependencies: 219
-- Name: distances_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".distances_id_seq', 1, false);


--
-- TOC entry 2967 (class 0 OID 0)
-- Dependencies: 214
-- Name: emails_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".emails_id_seq', 1, false);


--
-- TOC entry 2968 (class 0 OID 0)
-- Dependencies: 216
-- Name: offers_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".offers_id_seq', 1, false);


--
-- TOC entry 2969 (class 0 OID 0)
-- Dependencies: 202
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".permissions_id_seq', 1, false);


--
-- TOC entry 2970 (class 0 OID 0)
-- Dependencies: 212
-- Name: phones_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".phones_id_seq', 1, false);


--
-- TOC entry 2971 (class 0 OID 0)
-- Dependencies: 204
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".products_id_seq', 1, false);


--
-- TOC entry 2972 (class 0 OID 0)
-- Dependencies: 200
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".roles_id_seq', 1, false);


--
-- TOC entry 2973 (class 0 OID 0)
-- Dependencies: 210
-- Name: states_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".states_id_seq', 1, false);


--
-- TOC entry 2974 (class 0 OID 0)
-- Dependencies: 197
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: customer_base; Owner: postgres
--

SELECT pg_catalog.setval('"customer_base".users_id_seq', 1, true);


--
-- TOC entry 2975 (class 0 OID 0)
-- Dependencies: 223
-- Name: customer_schema_id_seq; Type: SEQUENCE SET; Schema: customers; Owner: postgres
--

SELECT pg_catalog.setval('customers.customer_schema_id_seq', 1, false);


--
-- TOC entry 2976 (class 0 OID 0)
-- Dependencies: 225
-- Name: customers_id_seq; Type: SEQUENCE SET; Schema: customers; Owner: postgres
--

SELECT pg_catalog.setval('customers.customers_id_seq', 1, false);


--
-- TOC entry 2804 (class 1259 OID 16508)
-- Name: routes_idx; Type: INDEX; Schema: customer_base; Owner: postgres
--

CREATE UNIQUE INDEX routes_idx ON "customer_base".routes USING btree (address_id_origin, address_id_destination);


--
-- TOC entry 2805 (class 1259 OID 16545)
-- Name: customer_schema_id_idx; Type: INDEX; Schema: customers; Owner: postgres
--

CREATE INDEX customer_schema_id_idx ON customers.customer_schema USING btree (id);


--
-- TOC entry 2806 (class 1259 OID 16544)
-- Name: customers_id_idx; Type: INDEX; Schema: customers; Owner: postgres
--

CREATE INDEX customers_id_idx ON customers.customers USING btree (id);


-- Completed on 2019-07-29 10:03:55

--
-- PostgreSQL database dump complete
--

