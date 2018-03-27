<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_51a9aa6cecadf02f1496a4bc025c7240c5b71ddb8cbeb87f56f3789ffd729305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa67db7ef1299807cb0e9d2bedfd17ad48a8e4ad507610bd6aa29a6f00876652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa67db7ef1299807cb0e9d2bedfd17ad48a8e4ad507610bd6aa29a6f00876652->enter($__internal_fa67db7ef1299807cb0e9d2bedfd17ad48a8e4ad507610bd6aa29a6f00876652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b107b7a5f487e4d19e45d5bd8992e2a03dc78831504fdce9ee2f8f4dc5e5199a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b107b7a5f487e4d19e45d5bd8992e2a03dc78831504fdce9ee2f8f4dc5e5199a->enter($__internal_b107b7a5f487e4d19e45d5bd8992e2a03dc78831504fdce9ee2f8f4dc5e5199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fa67db7ef1299807cb0e9d2bedfd17ad48a8e4ad507610bd6aa29a6f00876652->leave($__internal_fa67db7ef1299807cb0e9d2bedfd17ad48a8e4ad507610bd6aa29a6f00876652_prof);

        
        $__internal_b107b7a5f487e4d19e45d5bd8992e2a03dc78831504fdce9ee2f8f4dc5e5199a->leave($__internal_b107b7a5f487e4d19e45d5bd8992e2a03dc78831504fdce9ee2f8f4dc5e5199a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
