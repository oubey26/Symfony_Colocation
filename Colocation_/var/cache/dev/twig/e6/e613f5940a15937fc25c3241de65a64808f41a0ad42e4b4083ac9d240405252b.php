<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_58bc352d74173a173a674213291291c771eb0ddda38c8523c62381efd278e225 extends Twig_Template
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
        $__internal_391661582d8ea3a540014e5add13a6650c6208f75533b34c2d009bce8c63ed98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391661582d8ea3a540014e5add13a6650c6208f75533b34c2d009bce8c63ed98->enter($__internal_391661582d8ea3a540014e5add13a6650c6208f75533b34c2d009bce8c63ed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d8ac98d677c00c68b1c40ee1867ec55512399a2a07f80d3b8dda077a7343525c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ac98d677c00c68b1c40ee1867ec55512399a2a07f80d3b8dda077a7343525c->enter($__internal_d8ac98d677c00c68b1c40ee1867ec55512399a2a07f80d3b8dda077a7343525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_391661582d8ea3a540014e5add13a6650c6208f75533b34c2d009bce8c63ed98->leave($__internal_391661582d8ea3a540014e5add13a6650c6208f75533b34c2d009bce8c63ed98_prof);

        
        $__internal_d8ac98d677c00c68b1c40ee1867ec55512399a2a07f80d3b8dda077a7343525c->leave($__internal_d8ac98d677c00c68b1c40ee1867ec55512399a2a07f80d3b8dda077a7343525c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
