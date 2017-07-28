function solve(num){

    let allString = JSON.stringify(num)
                        .split(/\W+/)
                        .filter(w=>w.length>0)
                        .filter(w=>w=== w.toUpperCase())
                        .join(', ');
    console.log(allString);
}

solve(
    [
        'We start by HTML, CSS, JavaScript, JSON and REST.',
        'Later we touch some PHP, MySQL and SQL.',
        'LATER we play with C#, EF, SQL Server and ASP.NET MVC.',
        'Finally, we touch some Java, Hibernate and Spring.MVC.'
    ]
);