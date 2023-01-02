using System;
using System.Globalization;

class URI
{
    static void Main(string[] args)
    {
        double num1 = double.Parse(Console.ReadLine(), CultureInfo.InvariantCulture);
        double num2 = double.Parse(Console.ReadLine(), CultureInfo.InvariantCulture);
        double num3 = double.Parse(Console.ReadLine(), CultureInfo.InvariantCulture);
        double media = (num1*2 + num2*3 + num3*5) / 10;
        Console.WriteLine("MEDIA = {0}", media.ToString("0.0", CultureInfo.InvariantCulture));
    }
}
