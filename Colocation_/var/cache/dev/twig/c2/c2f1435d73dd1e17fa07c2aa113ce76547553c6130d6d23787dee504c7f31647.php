<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_518f9269ff4eff85750bd2b6c753960a87d813c69e126a851b670f262df1ea22 extends Twig_Template
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
        $__internal_e5446c0089ac5d9c8d30041d51d602e9f2195ea894865344303904d5c78d6987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5446c0089ac5d9c8d30041d51d602e9f2195ea894865344303904d5c78d6987->enter($__internal_e5446c0089ac5d9c8d30041d51d602e9f2195ea894865344303904d5c78d6987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ef1a63c56a04e961db337dc11b4fc507c1e1077555021a732eea04898e240a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1a63c56a04e961db337dc11b4fc507c1e1077555021a732eea04898e240a51->enter($__internal_ef1a63c56a04e961db337dc11b4fc507c1e1077555021a732eea04898e240a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e5446c0089ac5d9c8d30041d51d602e9f2195ea894865344303904d5c78d6987->leave($__internal_e5446c0089ac5d9c8d30041d51d602e9f2195ea894865344303904d5c78d6987_prof);

        
        $__internal_ef1a63c56a04e961db337dc11b4fc507c1e1077555021a732eea04898e240a51->leave($__internal_ef1a63c56a04e961db337dc11b4fc507c1e1077555021a732eea04898e240a51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
