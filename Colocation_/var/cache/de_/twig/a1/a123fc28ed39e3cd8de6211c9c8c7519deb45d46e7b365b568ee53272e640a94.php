<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2624af4c874ca302deae52eb1ef0c82932654926afeacf766ddb623b3f99ad71 extends Twig_Template
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
        $__internal_2428d145bca3d8100aaccee9b9adda8a80c231274e17f939897f08a1568fac75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2428d145bca3d8100aaccee9b9adda8a80c231274e17f939897f08a1568fac75->enter($__internal_2428d145bca3d8100aaccee9b9adda8a80c231274e17f939897f08a1568fac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_17e14f42a20218b9b7d8aa1b96f00558840e770009dbb513c0af3a4ea411d8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e14f42a20218b9b7d8aa1b96f00558840e770009dbb513c0af3a4ea411d8c9->enter($__internal_17e14f42a20218b9b7d8aa1b96f00558840e770009dbb513c0af3a4ea411d8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2428d145bca3d8100aaccee9b9adda8a80c231274e17f939897f08a1568fac75->leave($__internal_2428d145bca3d8100aaccee9b9adda8a80c231274e17f939897f08a1568fac75_prof);

        
        $__internal_17e14f42a20218b9b7d8aa1b96f00558840e770009dbb513c0af3a4ea411d8c9->leave($__internal_17e14f42a20218b9b7d8aa1b96f00558840e770009dbb513c0af3a4ea411d8c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
