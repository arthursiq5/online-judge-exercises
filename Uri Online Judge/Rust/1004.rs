use std::io::{stdin};

fn main () {
    let mut num1 = String::new();
    stdin().read_line(&mut num1).expect("");
    let num1: i32 = num1.trim().parse().expect("");

    let mut num2 = String::new();
    stdin().read_line(&mut num2).expect("");
    let num2: i32 = num2.trim().parse().expect("");

    println!("PROD = {}", num1 * num2);
}
