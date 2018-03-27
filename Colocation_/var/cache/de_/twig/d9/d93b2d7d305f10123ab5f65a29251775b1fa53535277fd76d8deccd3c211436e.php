<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_1229b67f4c3df80b650afff11f7d397a59b04affaa05543cfa779321b8e284ad extends Twig_Template
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
        $__internal_f82a14d175a1a0f9e8adcdb6c17c8ee90220cb9fc36300b537c42727decb0fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82a14d175a1a0f9e8adcdb6c17c8ee90220cb9fc36300b537c42727decb0fda->enter($__internal_f82a14d175a1a0f9e8adcdb6c17c8ee90220cb9fc36300b537c42727decb0fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9eaf89813adc780c0dfe48f2773973fd1fe34743995d6d5fe9ad0037593d4ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eaf89813adc780c0dfe48f2773973fd1fe34743995d6d5fe9ad0037593d4ca0->enter($__internal_9eaf89813adc780c0dfe48f2773973fd1fe34743995d6d5fe9ad0037593d4ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f82a14d175a1a0f9e8adcdb6c17c8ee90220cb9fc36300b537c42727decb0fda->leave($__internal_f82a14d175a1a0f9e8adcdb6c17c8ee90220cb9fc36300b537c42727decb0fda_prof);

        
        $__internal_9eaf89813adc780c0dfe48f2773973fd1fe34743995d6d5fe9ad0037593d4ca0->leave($__internal_9eaf89813adc780c0dfe48f2773973fd1fe34743995d6d5fe9ad0037593d4ca0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
