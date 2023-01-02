using System;
using System.Globalization;

class URI
{
    static void Main(string[] args)
    {
        double num1 = double.Parse(Console.ReadLine(), CultureInfo.InvariantCulture);
        double num2 = double.Parse(Console.ReadLine(), CultureInfo.InvariantCulture);
        double media = (num1*3.5 + num2*7.5) / 11;
        Console.WriteLine("MEDIA = {0}", media.ToString("0.00000", CultureInfo.InvariantCulture));
    }
}
