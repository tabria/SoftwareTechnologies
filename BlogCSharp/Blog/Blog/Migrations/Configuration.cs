namespace Blog.Migrations
{
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Migrations;
    using System.Linq;

    internal sealed class Configuration : DbMigrationsConfiguration<Blog.Models.BlogDbContext>
    {
        public Configuration()
        {
            AutomaticMigrationsEnabled = true;
            ContextKey = "Blog.Models.BlogDbContext";
            AutomaticMigrationDataLossAllowed = true;
        }

        protected override void Seed(Blog.Models.BlogDbContext context)
        {

        }
    }
}
