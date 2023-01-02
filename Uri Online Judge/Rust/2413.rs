use std::io::{stdin};

fn main() {
    let mut t = String::new();
    stdin().read_line(&mut t).expect("");
    let t :u16 = t.trim().parse().expect("");
    println!("{}", t*4);
}
