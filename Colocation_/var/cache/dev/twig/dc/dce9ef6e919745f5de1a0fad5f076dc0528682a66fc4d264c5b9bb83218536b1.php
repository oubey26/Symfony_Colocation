<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1e46546865a2352e2b78704660b9a54e3775c29ef9b1da7177b8ee562c5defd7 extends Twig_Template
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
        $__internal_babacfd748c72eb484c616d27e9bb75380451b757abdf3c9d1836b0b33537e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babacfd748c72eb484c616d27e9bb75380451b757abdf3c9d1836b0b33537e82->enter($__internal_babacfd748c72eb484c616d27e9bb75380451b757abdf3c9d1836b0b33537e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4e8da29d1d22d4be324faeb406efc4164cc439ef5fd69c06287e187c7c6d9dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8da29d1d22d4be324faeb406efc4164cc439ef5fd69c06287e187c7c6d9dfd->enter($__internal_4e8da29d1d22d4be324faeb406efc4164cc439ef5fd69c06287e187c7c6d9dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_babacfd748c72eb484c616d27e9bb75380451b757abdf3c9d1836b0b33537e82->leave($__internal_babacfd748c72eb484c616d27e9bb75380451b757abdf3c9d1836b0b33537e82_prof);

        
        $__internal_4e8da29d1d22d4be324faeb406efc4164cc439ef5fd69c06287e187c7c6d9dfd->leave($__internal_4e8da29d1d22d4be324faeb406efc4164cc439ef5fd69c06287e187c7c6d9dfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
