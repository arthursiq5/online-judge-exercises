use std::io::{stdin};

fn main() {
    let mut num1 = String::new();
    let mut num2 = String::new();
    let mut num3 = String::new();

    stdin().read_line(&mut num1).expect("");
    stdin().read_line(&mut num2).expect("");
    stdin().read_line(&mut num3).expect("");

    let num1: f64 = num1.trim().parse().expect("Num1 is not number");
    let num2: f64 = num2.trim().parse().expect("Num2 is not number");
    let num3: f64 = num3.trim().parse().expect("Num3 is not number");

    let media = (num1*2.0 + num2*3.0 + num3*5.0) / 10.0;

    println!("MEDIA = {:.1}", media);
}
