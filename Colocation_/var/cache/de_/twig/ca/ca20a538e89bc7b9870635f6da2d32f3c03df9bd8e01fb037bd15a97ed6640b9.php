<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c64f3643ddc787d6790a9bbc0f60d56f3a141413c26e05998516f0304b71fc6d extends Twig_Template
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
        $__internal_e5fd05ab62256daa84b17ced1de9d4f52156fa874932014ec4c6131c6aab6aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fd05ab62256daa84b17ced1de9d4f52156fa874932014ec4c6131c6aab6aa4->enter($__internal_e5fd05ab62256daa84b17ced1de9d4f52156fa874932014ec4c6131c6aab6aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3ca4330843f2669ddc7411ab50aee758244ad699ac3e2af69da60b5c6331602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca4330843f2669ddc7411ab50aee758244ad699ac3e2af69da60b5c6331602a->enter($__internal_3ca4330843f2669ddc7411ab50aee758244ad699ac3e2af69da60b5c6331602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5fd05ab62256daa84b17ced1de9d4f52156fa874932014ec4c6131c6aab6aa4->leave($__internal_e5fd05ab62256daa84b17ced1de9d4f52156fa874932014ec4c6131c6aab6aa4_prof);

        
        $__internal_3ca4330843f2669ddc7411ab50aee758244ad699ac3e2af69da60b5c6331602a->leave($__internal_3ca4330843f2669ddc7411ab50aee758244ad699ac3e2af69da60b5c6331602a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
