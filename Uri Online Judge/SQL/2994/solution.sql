SELECT
    d.name,
    ROUND(SUM((a.hours * 150) + (w.bonus * 0.01 * a.hours * 150)), 1) as salary
FROM doctors d
JOIN attendances a
    ON a.id_doctor = d.id 
JOIN work_shifts w
    ON w.id = a.id_work_shift 
GROUP BY d.name
ORDER BY salary DESC;
