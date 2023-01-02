use std::io::{stdin};

fn main() {
    let mut num1 = String::new();
    stdin().read_line(&mut num1).expect("");
    let num1: f64 = num1.trim().parse().expect("");

    let mut num2 = String::new();
    stdin().read_line(&mut num2).expect("");
    let num2: f64 = num2.trim().parse().expect("");

    let media = ((num1 * 3.5) + (num2 * 7.5)) / 11.0;

    println!("MEDIA = {:.5}", media);
}
