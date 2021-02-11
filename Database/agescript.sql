-- Script to run Age-Range

SELECT
    CASE
        WHEN age < 1 THEN 'Under 1'
        WHEN age BETWEEN 1 and 4 THEN '1 - 4'
        WHEN age >= 1 THEN '1 - 4'
        WHEN age BETWEEN 5 and 9 THEN '5 - 9'
        WHEN age >= 5 THEN '5 - 9'
        WHEN age BETWEEN 10 and 14 THEN '10 - 14'
        WHEN age >= 10 THEN '10 - 14'
        WHEN age BETWEEN 15 and 19 THEN '15 - 19'
        WHEN age >= 15 THEN '15 - 19'
        WHEN age BETWEEN 20 and 24 THEN '20 - 24'
        WHEN age >= 20 THEN '20 - 24'
        WHEN age BETWEEN 25 and 29 THEN '25 - 29'
        WHEN age >= 25 THEN '25 - 29'
        WHEN age BETWEEN 30 and 34 THEN '30 - 34'
        WHEN age >= 30 THEN '30 - 34'
        WHEN age BETWEEN 35 and 39 THEN '35 - 39'
        WHEN age >= 35 THEN '35 - 39'
        WHEN age BETWEEN 40 and 44 THEN '40 - 44'
        WHEN age >= 40 THEN '40 - 44'
        WHEN age BETWEEN 45 and 49 THEN '45 - 49'
        WHEN age >= 45 THEN '45 - 49'
        WHEN age >= 50 THEN 'Over 50'
        WHEN age IS NULL THEN 'Not Filled In (NULL)'
    END as `years`,
    COUNT(*) AS count

    FROM (SELECT TIMESTAMPDIFF(YEAR, `Dob`, CURDATE()) AS Age FROM detailed_results) as derived

    GROUP BY `years`

    ORDER BY `years`

    --End of the script

--Age Group, Gender and Count script starts here
    SELECT Case 
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) < 1 then '<1'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 1 and 4 then '1-4'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 5 and 9 then '5-9'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 10 and 14 then '10-14'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 15 and 19 then '15-19'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 20 and 24 then '20-24'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 25 and 29 then '25-29'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 30 and 34 then '30-34'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 35 and 39 then '35-39'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 40 and 44 then '40-44'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 45 and 49 then '45-49'
else '>50' END AS Age Group, 
sum(if(`Gender`='Male', 1, 0)) as Male, 
sum(if(`Gender`='Female', 1, 0)) as Female, 
COUNT(1) as total FROM detailed_results 
GROUP BY Case 
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) < 1 then '<1'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 1 and 4 then '1-4'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 5 and 9 then '5-9'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 10 and 14 then '10-14'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 15 and 19 then '15-19'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 20 and 24 then '20-24'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 25 and 29 then '25-29'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 30 and 34 then '30-34'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 35 and 39 then '35-39'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 40 and 44 then '40-44'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 45 and 49 then '45-49'
else '>50' END



---Ends here