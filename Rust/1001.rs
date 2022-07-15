fn main() {
    use std::io::{stdin};
    let mut a = String::new();
    let mut b = String::new();
    stdin().read_line(&mut a).expect("");
    stdin().read_line(&mut b).expect("");

    let a: i32 = a.trim().parse().expect("Not number");
    let b: i32 = b.trim().parse().expect("Not number");

    println!("X = {}", (a + b));
}
