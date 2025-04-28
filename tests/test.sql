
SELECT
    database.goods.item_name AS "Наименование товара",
    database.nakl_items.price AS "Цена",
    database.nakl_items.quanticy AS "Количество",
    database.nakl_items.sum AS "Сумма за товар",
FROM
    database.nakl_items
JOIN
    database.goods ON database.nakl_items.goods_id = database.goods.goods_id
WHERE
    database.nakl_items.nakl_id = 109
ORDER BY
    database.goods.item_name