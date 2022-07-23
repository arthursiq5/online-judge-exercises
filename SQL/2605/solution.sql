SELECT prod.name AS name,
    prov.name as name
FROM products AS prod
INNER JOIN providers AS prov
    ON prod.id_providers = prov.id
WHERE prod.id_categories = 6;
