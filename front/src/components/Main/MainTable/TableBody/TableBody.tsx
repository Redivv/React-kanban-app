import OrdersContainer from "./Orders/OrdersContainer";
import classes from "./TableBody.module.css";

const TableBody = () => {
  return (
    <main className={`row m-0 ${classes.tableColumns}`}>
      <OrdersContainer />
      <div className={`col-3 ${classes.tableColumn}`}></div>
      <div className={`col-3 ${classes.tableColumn}`}></div>
      <div className={`col-3 ${classes.tableColumn}`}></div>
      <div className={`col-3 ${classes.tableColumn}`}></div>
    </main>
  );
};

export default TableBody;
