<tr class="{class}"><td>{ID}</td><td>{Command}</td><td><input type="text" value="{Parameter}" style="max-width: 200px; border: none; background-color: #FFF;" readonly="" /></td><td>{Countries}</td><td>{Start}</td><td>{Stop}</td><td>{Received} / {Executed} / {Fails} / {Count}</td><td><a href="index.php?action=tasks&deltask={ID}" onclick="return confirm('Task \'{Command}\' with ID \'{ID}\' delete?')" title="Delete"><img src="images/other/delete.png" /></a> <a href="index.php?action=tasks&log&id={ID}" target="_blank" onclick="return popup(this.href);" title="Log"><img src="images/other/detail.png" /></a> <a href="index.php?action=tasks&edittask={ID}" title="Edit"><img src="images/other/edit.png" /></a></td></tr>