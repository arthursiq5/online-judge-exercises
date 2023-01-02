using System;
using System.Globalization;

class URI
{
    static void Main(string[] args)
    {
        double pi = 3.14159;
        double raio = double.Parse(Console.ReadLine(), CultureInfo.InvariantCulture);
        double area = Math.Round(
            pi * raio * raio,
            4
        );
        Console.WriteLine("A={0}", area.ToString("0.0000", CultureInfo.InvariantCulture));
    }
}
