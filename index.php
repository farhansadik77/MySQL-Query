<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      
      <?php

      //  Example-1 

      SELECT * FROM Customers;

      //  Example-2 

      SELECT CustomerName, City, Country FROM Customers;

      //  Example-3 

      SELECT DISTINCT Country FROM Customers;

      //  Example-4 

      SELECT * FROM Customers
      WHERE Country = 'Mexico';

      //  Example-5 

      SELECT * FROM Customers
      WHERE Country = 'Germany' AND City = 'Berlin';

      //  Example-6 

      SELECT * FROM Customers
      WHERE City = 'Berlin' OR City = 'Stuttgart';

      //  Example-7 

      SELECT * FROM Customers
      WHERE NOT Country = 'Germany';

      //  Example-8 

      SELECT * FROM Customers
      ORDER BY Country DESC;

      //  Example-9 

      SELECT * FROM Customers
      ORDER BY Country ASC, CustomerName DESC;

      //  Example-10 

      INSERT INTO Customers (CustomerName, City, Country)
      VALUES ('Cardinal', 'Stavanger', 'Norway');

      //  Example-11 

      SELECT CustomerName, ContactName, Address
      FROM Customers
      WHERE Address IS NULL;

      //  Example-12 

      SELECT CustomerName, ContactName, Address
      FROM Customers
      WHERE Address IS NOT NULL;

      //  Example-13 

      UPDATE Customers
      SET PostalCode = 00000
      WHERE Country = 'Mexico';

      //  Example-14 

      DELETE FROM Customers 
      WHERE CustomerName='Alfreds Futterkiste';

      //  Example-15 

      SELECT * FROM Customers
      WHERE Country='Germany'
      LIMIT 3;

      //  Example-16 

      SELECT MIN(Price) AS SmallestPrice
      FROM Products;

      //  Example-17 

      SELECT MAX(Price) AS LargestPrice
      FROM Products;

      //  Example-18 

      SELECT COUNT(ProductID)
      FROM Products;

      //  Example-19 

      SELECT AVG(Price)
      FROM Products;

      //  Example-20 

      SELECT SUM(Quantity)
      FROM OrderDetails;

      //  Example-21 

      SELECT * FROM Customers
      WHERE CustomerName LIKE 'a%';

      //  Example-22 

      SELECT * FROM Customers
      WHERE CustomerName LIKE '%a';

      //  Example-23 

      SELECT * FROM Customers
      WHERE CustomerName LIKE '%a%';

      //  Example-24 

      SELECT * FROM Customers
      WHERE ContactName LIKE 'a%o';

      //  Example-25 

      SELECT * FROM Customers
      WHERE CustomerName NOT LIKE 'a%';

      ?>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>