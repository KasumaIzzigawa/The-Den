class ArticleDisplay extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            title: "",
            date: "",
            content: ""
        }
    }
    render() {
        return (
            <div>
                <h3>{this.state.title}</h3>
                <h6>{this.state.date}</h6>
                <p>{this.state.content}</p>
            </div>
        );
    }
}

const ArticleContainer = document.querySelector("#chosen_article");
ReactDOM.render(ArticleDisplay, ArticleContainer);