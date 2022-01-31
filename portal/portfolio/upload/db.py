from staff_functions import out_blue, out_red
import pymysql.cursors
import datetime
class database:
    def check_in_db(self, vk_id, group):
            connection = pymysql.connect(host='',
                                    user='',
                                    password='',
                                    database='',
                                    charset='utf8mb4'
                                    )
            with connection.cursor() as cursor:
                sql = "SELECT * "
                cursor.execute(sql, (vk_id))
                rows = cursor.fetchall()
                if(len(rows) < 1):
                            sql = "INSERT INTO"
                            cursor.execute(sql, (group, vk_id, str(datetime.datetime.today().strftime("%Y-%m-%d %H:%M:%S")), 1))
                            rows = cursor.fetchall()
                print(rows)
                for row in rows:
#                           print(row)
                            last_seen_datetime = datetime.datetime.strptime(row[3], '%Y-%m-%d %H:%M:%S')
#                            print(datetime.datetime.today() - last_seen_datetime)
                            if((datetime.datetime.today() - last_seen_datetime).seconds < 1):
#                                    out_red("слишком часто")
                                    return 0
                            sql = "UPDATE `api_cheker` "
                            cursor.execute(sql, (str(int(row[4]) + 1), str(datetime.datetime.today().strftime("%Y-%m-%d %H:%M:%S")), vk_id))
                    
            connection.commit()
            connection.close()
            return 1
    def outDataBase(self):
        with self.connection.cursor() as cursor:
                sql = "SELECT"
                cursor.execute(sql)
                result = cursor.fetchone()
                print(result)
